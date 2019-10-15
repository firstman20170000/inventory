<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryFileModel;
use App\InventoryRecordModel;
use App\Purchase;
use App\Inventorymodel;
use App\Ordernote;
use App\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Redirect;
class PurchaseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    //goto purchase form view 
    public function createpurchaseorder($id)
    {
        $data =  Inventorymodel::find($id);    
        return view('purchase-order',['data'=>$data,
            'id'=>$id,
        ]);            
    }
    public function createpo(Request $request)
    {
        $request->validate([
            'itemid'=>'required',
            'Item_Qty'=>'required',
            'Item_Cost'=>'required',
            ''
        ]);
        $itemid=$request->itemid;
        $Item_Qty=$request->Item_Qty;
        $Item_Cost=$request->Item_Cost;
        $purchase_fee=$request->Purchase_fee;
        $purchase=new Purchase();
        $purchase->item_id=$itemid;
        $purchase->po_fee=$purchase_fee;
        $purchase->po_qty=$Item_Qty;
        $purchase->po_number=time();
        $purchase->po_item_cost=$Item_Cost; 
        $purchase->status_id=1;
        $purchase->save();
        return redirect()->back()->with('msg2',1);
    }
    public function viewtable(Request $requst)
    {
        
        return view('purchase-table');
    }
    public function getpurchase(Request $request)
    {
        $purchase=Purchase::orderBy('id','desc')->get();

        $data1 = DB::select("SELECT id FROM items_purchase_orders");
        $data2=array();
        foreach($purchase as $key => $row)
        {
            $item=Inventorymodel::where('Item_ID',$row->item_id)->first();
            $row->Item_name=$item->Item_Name;
            $row->item_prid=$item->id;
        }     
        return json_encode(['data'=>$purchase,'data1'=>$data1]);
    }
    public function viewpo($id,Request $request)
    {
        $purchase=Purchase::where('id',$id)->first();
        $itemid=$purchase->item_id;
        $itemdata = Inventorymodel::where('Item_ID',$itemid)->first();
        $item_file=InventoryFileModel::where('Item_id',$itemdata->id)->first();
        $userid = Auth::id();
        $notes=Ordernote::where('User_ID',$userid)->where('Order_ID',$purchase->po_number)->get();
        return view('viewpurchase-order',['data'=>$purchase,'data1'=>$itemdata,'data2'=>$item_file,'notes'=>$notes]);
    }
    public function editpo($id,Request $request)
    {
        $purchase=Purchase::where('id',$id)->first();
        $itemid=$purchase->item_id;
        $itemdata =  Inventorymodel::where('Item_ID',$itemid)->first();
        return view('editpurchase-order',['data'=>$purchase,'data1'=>$itemdata]);

    }
    public function changepo(Request $request)
    {
        $po_id=$request->po_id;
        $po_status=$request->po_status;
        $Item_Qty=$request->Item_Qty;
        $Item_Cost=$request->Item_Cost;
        $po=Purchase::where('id',$po_id)->first();
        $invoice=Invoice::where('order_id',$po->po_number)->where('type','po')->first();
        $flag=0;
        if($po_status!=6)
        {
           if($po_status<$po->status_id)
           {
                return redirect()->back()->with('msg',4);
           } 
        }
        if($po_status==4||$po_status==5)
        {
            if($invoice)
            {
                $pay_st=$invoice->status_id;
                if($pay_st==0)
                {
                    return redirect()->back()->with('msg',2);
                } else {

                }

            }
            else{
                return redirect()->back()->with('msg',3);
            }
        }
        if($po_status==3&&$po->status_id!=3) {
            $newinv=new Invoice();
            $newinv->invoice_number=time();
            $newinv->order_id=$po->po_number;
            $newinv->client_detail_id=1;
            $newinv->vendor_detail_id=1;
            $newinv->payment_detail_id=1;
            $newinv->status_id=0;
            $price=$Item_Qty*$Item_Cost;
            $price=$price*(100+$po->po_fee)/100;
            $price=number_format($price, 2, '.', '');
            $newinv->Invoice_total=$price;
            $newinv->type='po';
            $newinv->save();
            $flag=1;
        }
        if($po_status==6&&$po->status_id>2)
        {
            return redirect()->back()->with('msg',6);
        }
        if($po_status!=0)
        {
            $po->status_id=$po_status;

        }   
        if($po_status==5)
        {
            $item_id=$po->item_id;
            $item=Inventorymodel::where('Item_ID',$item_id)->first();
            $stock_sum = DB::table('items_inv_logs')
            ->where('Item_id', '=', $item->id)->where('TYPE', '=', 'IN')->select('CHANCE_QTY')
            ->sum('CHANCE_QTY');
            $stock_minus = DB::table('items_inv_logs')
            ->where('Item_id', '=', $item->id)->where('TYPE', '=', 'OUT')->select('CHANCE_QTY')
            ->sum('CHANCE_QTY');
            $item->Units_in_Stock=$stock_sum-$stock_minus+$Item_Qty;
            
            $new_stock=new InventoryRecordModel();
            $new_stock->TRANSACTION_TYPE="Purchase Order";
            $new_stock->REFERENCE="PO-".$po->po_number."-".$po->id."-BP";
            $new_stock->CHANCE_QTY=$Item_Qty;
            $new_stock->Stock_Record=$item->Units_in_Stock;
            $new_stock->Item_id=$item->id;
            $new_stock->TYPE='IN';
            $new_stock->save();
            $item->save();
        }
        if($po_status==6)
        {
            $invoice->status_id=2;
            $invoice->save();
        }
        $po->po_qty=$Item_Qty;
        $po->po_item_cost=$Item_Cost;
        $po->save();
        if($flag==1)
        {
           return redirect()->back()->with('msg2',1);
        } else 
        {
            return redirect('purchase-order/view/table');  
        }
        
        
    }
    public function postnote(Request $request)
    {
        $notes=$request->subnote;
        $poid=$request->poid;
        $userid = Auth::id();
        $ordernote=new Ordernote();
        $ordernote->User_ID=$userid;
        $ordernote->Order_ID=$poid;
        $ordernote->COMMENT=$notes;
        $ordernote->save();
        return redirect()->back();

    }
}
