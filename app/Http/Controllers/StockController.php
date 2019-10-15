<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bundle;
use App\BundleItem;
use App\Inventorymodel;
use App\Stockorder;
use App\Stockstatus;
use App\BundleLog;
use App\Stocknote;
use App\InventoryRecordModel;
use Redirect;
use App\Invoice;
use Illuminate\Support\Facades\Auth;
class StockController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');  
    }
    public function createstock($id)
    {
        $bundle=Bundle::where('id',$id)->first();
        $bundle_item=BundleItem::where('bundle_id',$id)->get();
        $min_bundle=0;
        foreach($bundle_item as $key => $row)
        {
            $bandle_item_qty=$row->qty_in_bundle;
            $item_id=$row->item_id;
            $item=Inventorymodel::where('id',$item_id)->first();
            $item_stock=$item->Units_in_Stock;
            $co=intval(floor($item_stock/$bandle_item_qty));
            if($key==0)
            {
                $min_bundle=$co;
            } else {
                if($min_bundle>$co){
                    $min_bundle=$co; 
                }
            }
            
        }
        
        return view('stock-create',['bundle'=>$bundle,'min_bundle'=>$min_bundle]);
    }
    public function poststockorder(Request $request)
    {
        
        $bundle_id=$request->bundleid;
        $bundle_qty=$request->bundle_qty;
        $bundle_item=BundleItem::where('bundle_id',$bundle_id)->get();
        foreach($bundle_item as $key =>$row)
        {
            $bundltotitem=$row->qty_in_bundle*$bundle_qty;
            $itemid=$row->item_id;
            $item=Inventorymodel::where('id',$itemid)->first();
            if($item->Units_in_Stock<$bundltotitem) {
                $errinfo=[];
                $errinfo['itemname']=$item->Item_Name;
                $errinfo['qty']=$item->Units_in_Stock;
                return Redirect::back()->with('msg', $errinfo);
            }
        }
        
        
        $bundle=Bundle::where('id',$bundle_id)->first();
        $stock=new Stockorder();
        $t=time();
        $stock->MTSO_NUMBER=$t;
        $stock->Bundle_id=$bundle_id;
        $stock->QTY=$bundle_qty;
        $stock->ORDER_TAT=ceil($bundle_qty/$bundle->turnaround);
        $stock->Bundling_fee=$bundle->bundling_fee;
        $stock->Status_id=1;
        $stock->save();
        $bundle_item=BundleItem::where('bundle_id',$bundle_id)->get();
        foreach($bundle_item as $key =>$row)
        {
            $bundltotitem=$row->qty_in_bundle*$bundle_qty;
            $itemid=$row->item_id;
            $item=Inventorymodel::where('id',$itemid)->first();
            $item->Units_in_Stock=$item->Units_in_Stock-$bundltotitem;
            $item->save();
            $modify = new InventoryRecordModel([
                  'Item_id' => $itemid,
                  'REFERENCE' =>"MTS-".$t."-".$stock->id."-BP" ,
                  'CHANCE_QTY' => $bundltotitem,
                  'TRANSACTION_TYPE' => 'Make to Stock Order',
                  'Stock_Record' => $item->Units_in_Stock,
                  'TYPE' =>'OUT'
              ]);
              $modify->save();
        }
        $newinv=new Invoice();
        $newinv->invoice_number=time();
        $newinv->order_id=$t;
        $newinv->client_detail_id=1;
        $newinv->vendor_detail_id=1;
        $newinv->payment_detail_id=1;
        $newinv->status_id=0;
        $price=$bundle_qty*$bundle->bundling_fee;
     
        $price=number_format($price, 2, '.', '');
        $newinv->Invoice_total=$price;
        $newinv->type='mtso';
        $newinv->save();
        return redirect()->back()->with('msg2',1);
      
    }
    public function viewstocktable()
    {
        return view('stock-table');
    }
    public function getstock(){
        $stock=Stockorder::orderBy('id','desc')->get();
        foreach($stock as $key => $row)
        {
            $bundleid=$row->Bundle_id;
            $bundle=Bundle::where('id',$bundleid)->first();
            $row->bundlename=$bundle->bundle_name;
            $row->bundleid=$bundle->bundle_id;
            $row->stock_status=Stockstatus::where('id',$row->Status_id)->first()->statusname;
            $row->order_total=$row->QTY*$bundle->bundling_fee;
        }
        return json_encode(['data' => $stock]);
    }
    public function viewstock($id,Request $request)
    {
        $storder=Stockorder::where('id',$id)->first();
        $stocknote=Stocknote::where('user_id',Auth::id())->where('order_id',$id)->get();
        $bundle=Bundle::where('id',$storder->Bundle_id)->first();
        return view('stock-view',['stock'=>$storder,'bundle'=>$bundle,'stocknote'=>$stocknote]);

    }
    public function postnote(Request $request)
    {
        
        
         $stockid=$request->stockid;
         $comment=$request->comment;
         $userid = Auth::id();
         $new_comment=new Stocknote();
         $new_comment->user_id=$userid;
         $new_comment->order_id=$stockid;
         $new_comment->comment=$comment;
         $new_comment->save();
         return Redirect()->back();

    }
    public function editstock($id,Request $request)
    {
        $storder=Stockorder::where('id',$id)->first();
        $bundle=Bundle::where('id',$storder->Bundle_id)->first();
        return view('stock-edit',['stock'=>$storder,'bundle'=>$bundle]);   
    }
    public function changestock(Request $request)
    {
        $stockid=$request->stockid;
        $stock=Stockorder::where('id',$stockid)->first();
        $invoice=Invoice::where('order_id', $stock->MTSO_NUMBER)->first();
        $bundlid=$stock->Bundle_id;
        $status=$request->po_status;
        
        if($status!=4&&(intVal($status)<$stock->Status_id)) {
          
            return redirect()->back()->with('msg1',4);
        }
        if($invoice)
        {
            $paid_st=$invoice->status_id;
            if($paid_st==0)
            {
                if($status==2||$status==3){
                    return redirect()->back()->with('msg1',2);
                } 
            }
        } else {
            return redirect()->back()->with('msg1',3);
        }
       
        $bundle=Bundle::where('id',$bundlid)->first();
        $item=BundleItem::where('bundle_id', $bundlid)->get();
        $bundle_qty=$request->bundle_qty;
        if($stock->QTY>$bundle_qty){
            $minus=$stock->QTY-$bundle_qty;
            foreach($item as $key => $row)
            {
                $qty_in_bundle=$row->qty_in_bundle;
                $st_order=$qty_in_bundle*$minus;
                $itemid=$row->item_id;
                $eaitem=Inventorymodel::where('id',$itemid)->first();
                $eaitem->Units_in_Stock= $eaitem->Units_in_Stock+$st_order;
                $eaitem->save();
                $modify = new InventoryRecordModel([
                  'Item_id' => $itemid,
                  'REFERENCE' =>"MTS-".$stock->MTSO_NUMBER."-".$stock->id."-BP" ,
                  'CHANCE_QTY' => $st_order,
                  'TRANSACTION_TYPE' => 'Make to Stock Order',
                  'Stock_Record' => $eaitem->Units_in_Stock,
                  'TYPE' =>'IN'
              ]);
              $modify->save();
            }
            $stock->QTY=$bundle_qty;
            $stock->ORDER_TAT=ceil($bundle_qty/$bundle->turnaround);
            $stock->save();
        } else if($stock->QTY<$bundle_qty) {
            $plus=$bundle_qty-$stock->QTY;
            foreach($item as $key => $row){
                $qty_in_bundle=$row->qty_in_bundle;
                $st_order=$qty_in_bundle*$plus;
                $itemid=$row->item_id;
                $eaitem=Inventorymodel::where('id',$itemid)->first();
                if($eaitem->Units_in_Stock<$st_order) {
                    $errinfo=[];
                    $errinfo['itemname']=$item->Item_Name;
                    $errinfo['qty']=$item->Units_in_Stock;
                    return Redirect::back()->with('msg', $errinfo);
                }

            }
            $item=BundleItem::where('bundle_id', $bundlid)->get();
            foreach($item as $key => $row)
            {
                $qty_in_bundle=$row->qty_in_bundle;
                $st_order=$qty_in_bundle*$plus;
                $itemid=$row->item_id;
                $eaitem=Inventorymodel::where('id',$itemid)->first();
                $eaitem->Units_in_Stock=$eaitem->Units_in_Stock-$st_order;
                $eaitem->save();
                 $modify = new InventoryRecordModel([
                  'Item_id' => $itemid,
                  'REFERENCE' =>"MTS-".$stock->MTSO_NUMBER."-".$stock->id."-BP" ,
                  'CHANCE_QTY' => $st_order,
                  'TRANSACTION_TYPE' => 'Make to Stock Order',
                  'Stock_Record' => $eaitem->Units_in_Stock,
                  'TYPE' =>'OUT'
              ]);
              $modify->save();
            }
            $stock->QTY=$bundle_qty;
            $stock->ORDER_TAT=ceil($bundle_qty/$bundle->turnaround);
            $stock->save();   
        }
        if($status==3)
        {
            $bundle->bundles_in_stock=$bundle->bundles_in_stock+$bundle_qty;
            $newlogitem=new BundleLog();
            $newlogitem->bundle_id=$bundlid;
            $newlogitem->TRANSACTION_TYPE="Make To Stock Order";
            $newlogitem->REFERENCE="MTS-".$stock->MTSO_NUMBER."-".$stock->id."-BP";
            $newlogitem->TYPE='IN';
            $newlogitem->CHANCE_QTY=$bundle_qty;
            $newlogitem->Stock_Record=$bundle->bundles_in_stock;
            $newlogitem->save();
            $bundle->save();
            
            
        }
        if($status==4) {
            $item=BundleItem::where('bundle_id', $bundlid)->get();
            foreach($item as $key => $row)
            {
                $itemid=$row->item_id;
                $eaitem=Inventorymodel::where('id',$itemid)->first();
                $qty_in_bundle=$row->qty_in_bundle;
                $st_order=$qty_in_bundle*$bundle_qty;
                $eaitem->Units_in_Stock=$eaitem->Units_in_Stock+$st_order;
                $eaitem->save();
                $modify = new InventoryRecordModel([
                  'Item_id' => $itemid,
                  'REFERENCE' =>"MTS-".$stock->MTSO_NUMBER."-".$stock->id."-BP" ,
                  'CHANCE_QTY' => $st_order,
                  'TRANSACTION_TYPE' => 'Make to Stock Order',
                  'Stock_Record' => $eaitem->Units_in_Stock,
                  'TYPE' =>'IN'
              ]);
              $modify->save();
            }
           
        }
        if($status==4)
        {
            $invoice->Status_id=2;
            $invoice->save();
        }
        $stock->Status_id=$status;
        $stock->save();
        return redirect('view/stock-order/table');
    }
}
