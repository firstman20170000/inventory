<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dropordernote;
use App\Dropproduct;
use App\Dropshipment;
use App\Shippingtype;
use App\Shippingmethod;
use App\Bundle;
use App\BundleLog;
use App\Invoice;
use Redirect;
use Illuminate\Support\Facades\Auth;
class DropzoneController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createdropship()
    {
        $bundle=Bundle::all();
        return view('dropship-create',['bundle'=>$bundle]);
    }
    public function editdropship($id,Request $request)
    {
        $drop_order=Dropshipment::where('id',$id)->first();
        $order_bundle=Dropproduct::where('dropship_id',$drop_order->dropship_number)->get();
     
        foreach($order_bundle as $key=>$row)
        { 
            $row->bundle=Bundle::where('id',$row->bundle_id)->first();
        }
        

        return view('dropship-edit',['items'=>$order_bundle,'order'=>$drop_order]);
    }
    public function viewdropship($id,Request $request)
    {
        $userid=Auth::id();
     
        $note=Dropordernote::where('userid',$userid)->where('orderid',$id)->get();
        $order=Dropshipment::where('id',$id)->first();
        $dropproduct=Dropproduct::where('dropship_id',$order->dropship_number)->get();
        foreach($dropproduct as $key => $row)
        {
            $bundle_id=$row->bundle_id;
            $bundle=Bundle::where('id',$bundle_id)->first();
            $row->bundle=$bundle;
            
        }
        return view('dropship-view',['order'=>$order,'note'=>$note,'product'=>$dropproduct]);

    }
    public function dropshiptable()
    {
        return view('dropship-order');
    }
    public function getdropshippingdata()
    {
        $shippingdata=Dropshipment::orderBy('id','desc')->get();
        foreach($shippingdata as $key => $row)
        {
            $row->Type_Name=Shippingtype::where('id',$row->shipping_method_type)->first()->Type_Name;
        }
        return json_encode(['data' => $shippingdata]);
    }
    public function checkvalidation(Request $request)
    {
        $bundleid=$request->bundle_id;
        $amount=$request->tot;
        $bundleinfo=Bundle::where('id',$bundleid)->first();
        $dbamount=$bundleinfo->bundles_in_stock;
        if($amount>$dbamount)
        {
            return json_encode(['result' =>'error','data'=>$bundleinfo]);
        } else {
            return json_encode(['result' =>'success','data'=>$bundleinfo]);
        }
    }
    public function postshipping(Request $request)
    {
        $fname=$request->fname;
        $lname=$request->lname;
        $address1=$request->address1;
        $address2=$request->address2;
        $postcode=$request->postcode;
        $city=$request->city;
        $country=$request->country;
        $state=$request->state;
        $telephone=$request->telephone;
        $ship_type=$request->ship_type;
        $bundleid=$request->bundleid;
        $shipqty=$request->qty;
        $ref=$request->ref;
        $drop_order_id=$request->order_id;
        $shipment=new Dropshipment();
        $shipment->dropship_number=$drop_order_id;
        $shipment->address_name=$fname;
        $shipment->address_last_name=$lname;
        $shipment->address_1=$address1;
        $shipment->address_2=$address2;
        $shipment->address_postcode=$postcode;
        $shipment->address_city=$city;
        $shipment->address_state=$state;
        $shipment->address_country=$country;
        $shipment->address_telephone=$telephone;
        $shipment->shipping_method_type=$ship_type;
        $shipment->dropship_reference=$ref;
        $shipment->status_id=1;
        $shipment->save();
        foreach($bundleid as $key=> $row)
        {
            $drop_order=Dropproduct::where('dropship_id',$drop_order_id)->where('bundle_id',$row)->first();
            if($drop_order) {
                $drop_order->dropship_qty=$drop_order->dropship_qty+$shipqty[$key];
                $drop_order->save();
            } else 
            {
                $new_drop_order=new Dropproduct();
                $new_drop_order->dropship_id=$drop_order_id;
                $new_drop_order->bundle_id=$row;
                $new_drop_order->dropship_qty=$shipqty[$key];
                $new_drop_order->save();    
            }
        }
        $weight=0;
        foreach($bundleid as $key => $row)
        {
            $log=new BundleLog();
            $bundle=Bundle::where('id',$row)->first();
            $weight=$weight+$bundle->bundle_weight*$shipqty[$key];
            $bundle->bundles_in_stock=$bundle->bundles_in_stock-$shipqty[$key];
            $bundle->save();
            $log->TRANSACTION_TYPE="Dropship Order";
            $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
            $log->CHANCE_QTY=$shipqty[$key];
            $log->Stock_Record=$bundle->bundles_in_stock;
            $log->TYPE='OUT';
            $log->Bundle_id=$row;
            $log->save();
        }
        $shipment->Total_weight=$weight;
        $shipment->save();
        return 1;
        
    }
    public function editvalidation(Request $request)
    {
        $bundle_id=$request->bundle_id;
        $tot=$request->tot;
        $order_id=$request->order_id;
        $orderbook=Dropproduct::where('dropship_id',$order_id)->where('bundle_id',$bundle_id)->first();
        $bundleinfo=Bundle::where('id',$bundle_id)->first();
        if($orderbook)
        {
            if($orderbook->dropship_qty>=$tot)
            {
                return json_encode(['result' =>'success','data'=>$bundleinfo]);
            } else {
                $more_amount=$tot-$orderbook->dropship_qty;
                if($bundleinfo->bundles_in_stock<$more_amount)
                {
                    return json_encode(['result' =>'error','data'=>$bundleinfo]);
                } else 
                {
                    return json_encode(['result' =>'success','data'=>$bundleinfo]);
                }
             }   
        } else 
        {
            if($bundleinfo->bundles_in_stock>=$tot) {
                return json_encode(['result' =>'success','data'=>$bundleinfo]);
            } else {
                return json_encode(['result' =>'error','data'=>$bundleinfo]);
            }
        }
    }
    public function updatedroporder(Request $request)
    {
        $fname=$request->fname;
        $lname=$request->lname;
        $address1=$request->address1;
        $address2=$request->address2;
        $postcode=$request->postcode;
        $city=$request->city;
        $country=$request->country;
        $state=$request->state;
        $telephone=$request->telephone;
        $ship_mod=$request->ship_mod;
        $status=$request->status_id;
        $bundleid=$request->bundleid;
        $tracking_number=$request->Tracking_number;
        $shipping_cost=$request->shipping_cost;
        $shipqty=$request->qty;
        
        $reference=$request->reference;
        $shipping_cost=$request->shipping_cost;
        $drop_order_id=$request->order_id;
        $flag=0;
        $shipment=Dropshipment::where('dropship_number',$drop_order_id)->first();
        if($status<$shipment->status_id){
            echo 4;
            exit;
        }
        if($status==3&&$shipment->status_id!=3)
        {
            
            $newinv=new Invoice();
            $newinv->invoice_number=time();
            $newinv->order_id=$shipment->dropship_number;
            $newinv->client_detail_id=1;
            $newinv->vendor_detail_id=1;
            $newinv->payment_detail_id=1;
            $newinv->status_id=0;
            $newinv->Invoice_total=$shipping_cost;
            $newinv->type='DSO';
            $newinv->save();
            $flag=1;
        }
        $invoice=Invoice::where('order_id',$shipment->dropship_number)->first();
        if($status==4||$status==5)
        {
            if($invoice){
                $paid_st=$invoice->status_id;
                if($paid_st==0)
                {
                    echo 2;
                    exit;
                }
            } else 
            {
                echo 3;
                exit;
            }

        }
        
        if($status==6&&($shipment->status_id==3||$shipment->status_id==4||$shipment->status_id==5))
        {
            echo 1;
            exit;
        }
        $shipment->dropship_number=$drop_order_id;
        $shipment->address_name=$fname;
        $shipment->address_last_name=$lname;
        $shipment->address_1=$address1;
        $shipment->address_2=$address2;
        $shipment->address_postcode=$postcode;
        $shipment->address_city=$city;
        $shipment->address_state=$state;
        if($country!="")
        {
            $shipment->address_country=$country;    
        }
      
        $shipment->address_telephone=$telephone;
        $shipment->shipping_method=$ship_mod;
        $shipment->status_id=$status;
        $shipment->tracking_number=$tracking_number;
        $shipment->dropship_reference=$reference;
        $shipment->drop_shipping_cost=$request->shipping_cost;
        $shipment->save();
        $dropbook=Dropproduct::where('dropship_id',$drop_order_id)->get();
        $weight=0;
        
        
        foreach($bundleid as $key => $row)
        {
            $order=Dropproduct::where('dropship_id',$drop_order_id)->where('bundle_id',$row)->first();
            $bundle=Bundle::where('id',$row)->first();
            $weight=$weight+$bundle->bundle_weight*$shipqty[$key];
            if($order){
                if($order->dropship_qty>$shipqty[$key])
                {
                    $plus=$order->dropship_qty-$shipqty[$key];
                    $log=new BundleLog();
                    $bundle->bundles_in_stock=$bundle->bundles_in_stock+$plus;
                    $bundle->save();
                    $log->TRANSACTION_TYPE="Dropship Order";
                    $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
                    $log->CHANCE_QTY=$plus;
                    $log->Stock_Record=$bundle->bundles_in_stock;
                    $log->TYPE='IN';
                    $log->Bundle_id=$row;
                    $log->save();
                } else if($order->dropship_qty<$shipqty[$key]) {
                    $minus=$shipqty[$key]-$order->dropship_qty;
                    $log=new BundleLog();
                    $bundle->bundles_in_stock=$bundle->bundles_in_stock-$minus;
                    $bundle->save();
                    $log->TRANSACTION_TYPE="Dropship Order";
                    $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
                    $log->CHANCE_QTY=$minus;
                    $log->Stock_Record=$bundle->bundles_in_stock;
                    $log->TYPE='OUT';
                    $log->Bundle_id=$row;
                    $log->save();
                }
                
            } else {
                $log=new BundleLog();
                $bundle->bundles_in_stock=$bundle->bundles_in_stock-$shipqty[$key];
                $bundle->save();
                $log->TRANSACTION_TYPE="Dropship Order";
                $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
                $log->CHANCE_QTY=$shipqty[$key];
                $log->Stock_Record=$bundle->bundles_in_stock;
                $log->TYPE='OUT';
                $log->Bundle_id=$row;
                $log->save();
            }
        }
        $shipment->Total_weight=$weight;
        $shipment->save();
        foreach($dropbook as $key => $row)
        {
            $count=0;
            foreach($bundleid as $key1=> $row1)
            {
                if($row->bundle_id==$row1) {
                    $count=1;  
                }
            }
            if($count==0) {
                $log=new BundleLog();
                $bundle=Bundle::where('id',$row->bundle_id)->first();
                $bundle->bundles_in_stock=$bundle->bundles_in_stock+$row->dropship_qty;
   
                $bundle->save();
                $log->TRANSACTION_TYPE="Dropship Order";
                $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
                $log->CHANCE_QTY=$row->dropship_qty;
                $log->Stock_Record=$bundle->bundles_in_stock;
                $log->TYPE='IN';
                $log->Bundle_id=$row->bundle_id;
                $log->save();    
            }
        }
        Dropproduct::where('dropship_id',$drop_order_id)->delete();
        foreach($bundleid as $key=> $row)
        {
            $drop_order=Dropproduct::where('dropship_id',$drop_order_id)->where('bundle_id',$row)->first();
            if($drop_order) {
                $drop_order->dropship_qty=$drop_order->dropship_qty+$shipqty[$key];
                $drop_order->save();
            } else 
            {
                $new_drop_order=new Dropproduct();
                $new_drop_order->dropship_id=$drop_order_id;
                $new_drop_order->bundle_id=$row;
                $new_drop_order->dropship_qty=$shipqty[$key];
                $new_drop_order->save();    
            }
        }
        if($status==6)
        {
            $dropbok=Dropproduct::where('dropship_id',$drop_order_id)->get();
            foreach($dropbok as $key => $row)
            {
                $log=new BundleLog();
                $bundle=Bundle::where('id',$row->bundle_id)->first();
                $bundle->bundles_in_stock=$bundle->bundles_in_stock+$row->dropship_qty;
                $bundle->save();
                $log->TRANSACTION_TYPE="Dropship Order";
                $log->REFERENCE="DSO-".$drop_order_id."-".$shipment->id."-BP";
                $log->CHANCE_QTY=$row->dropship_qty;
                $log->Stock_Record=$bundle->bundles_in_stock;
                $log->TYPE='IN';
                $log->Bundle_id=$row->bundle_id;
                $log->save();    
            }
        }
        if($flag==1)
        {
          echo "6";
        } else {
          echo "5";
          
        }
         
    }
    public function postnote(Request $request)
    {
        $new_order_note=new Dropordernote();
        $new_order_note->userid=Auth::id();
        $new_order_note->orderid=$request->order_id;
        $new_order_note->comment=$request->comment;
        $new_order_note->save();
        return redirect()->back();
    }

}
