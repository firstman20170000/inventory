<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shippingplan;
use App\Bundle;
use App\BundleItem;
use App\Inventorymodel;
use App\BundleLog;
use App\Stocknote;
use App\Shippingtype;
use App\Shippingmethod;
use App\BundelPackage;
use App\Shippingpackagetran;
use App\Shippingfile;
use App\Shipsubnote;
use App\Invoice;
use Redirect;
use Illuminate\Support\Facades\Auth;
class ShippingController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createship($id,Request $request)
    {
        $package=BundelPackage::where('bundle_id',$id)->get();
        $Shippingmethod=Shippingmethod::distinct()->get(['type_id']);
        $bundle=Bundle::where('id',$id)->first();
        $type=[];
        foreach($Shippingmethod as $key => $row)
        {
            $type[$key]=Shippingtype::where('id',$row->type_id)->first();
        }
        if(count($package)==0){
            return Redirect::back()->with('msg',1);
        }
        return view('shipping-create',['package'=>$package,'bundle'=>$bundle,'metype'=>$type]);
    }
    public function viewshippaln($id)
    {   
        $plan=Shippingplan::where('id',$id)->first();
     
        $userid = Auth::id();
        $note=Shipsubnote::where('user_id',$userid)->where('ship_id',$id)->get();
        $bundle=Bundle::where('id',$plan->bundle_id)->first();
        return view('shipping-view',['plan'=>$plan,'bundle'=>$bundle,'note'=>$note]);
    }
    public function editshipplan($id,Request $request)
    {
        $plan=Shippingplan::where('id',$id)->first();
        $bundle=Bundle::where('id',$plan->bundle_id)->first();
        $package=BundelPackage::where('bundle_id',$plan->bundle_id)->get();
        $maspackage=Shippingpackagetran::where('fso_id',$plan->Sp_O_id)->get();
        foreach($maspackage as $key => $row)
        {
            $pack_id=$row->pack_id;
          
            $row->mc_weight=BundelPackage::where('id',$pack_id)->first()->mc_weight;
            $row->mc_length=BundelPackage::where('id',$pack_id)->first()->mc_length;
            $row->mc_height=BundelPackage::where('id',$pack_id)->first()->mc_height;
            $row->mc_width=BundelPackage::where('id',$pack_id)->first()->mc_width;
        }
        return view('shipping-edit',['package'=>$package,'plan'=>$plan,'bundle'=>$bundle,'maspack'=>$maspackage]);
    }
    public function viewtable()
    {
        return view('shipping-table');
    }
    public function shipdata(Request $request)
    {
        $shippingdata=Shippingplan::orderBy('id','desc')->get();
        foreach($shippingdata as $key => $row)
        {
            $bundleid=$row->bundle_id;
            $bundle=Bundle::where('id',$bundleid)->first();
            $row->bundlename=$bundle->bundle_name;
            $row->bundleid="BDL-".$bundle->bundle_id."-".$bundle->id."-BP";
            $row->order_tot=$row->cost*$row->QTY;    
        }
        return json_encode(['data' => $shippingdata]);
    }
    public function viewtype(Request $request)
    {
        return view('shippingtype');
    }
    public function getshippingmethodtype(Request $request)
    {
        $allship=Shippingmethod::orderBy('id','desc')->get();
        foreach($allship as $key=>$row)
        {
            $row->typename=Shippingtype::where('id',$row->type_id)->first()->Type_Name;
        }
        return json_encode(['data' => $allship]);
    }
    public function createshippingmethodtype(Request $request)
    {
        return view('shipping-createtype');
    }
    public function createshipmethod(Request $request)
    {
        $Cour_name=$request->Cour_name;
        $shippingday=$request->shippingday;
        $Method_type=$request->Method_type;
        $Shippingmethod=new Shippingmethod();
        $Shippingmethod->type_id=$Method_type;
        $Shippingmethod->shipping_time=$shippingday;
        $Shippingmethod->Courier_Name=$Cour_name;
        $Shippingmethod->save();
        return Redirect::back()->with('msg',1);
    }
    public function editshipmethod($id,Request $request)
    {
        $method=Shippingmethod::where('id',$id)->first();
        return view('shipping-edittype',['method'=>$method]);
    }
    public function updateshipmethod(Request $request)
    {
        $shipmethodid=$request->shipmethodid;
        $Cour_name=$request->Cour_name;
        $shippingday=$request->shippingday;
        $Method_type=$request->Method_type;
        $method=Shippingmethod::where('id',$shipmethodid)->first();
        $method->type_id=$Method_type;
        $method->shipping_time=$shippingday;
        $method->Courier_Name=$Cour_name;
        $method->save();
        return Redirect::back()->with('msg',1);

    }
    public function deletemethod(Request $request)
    {
        $deleid=$request->deleid;
        Shippingmethod::where('id',$deleid)->delete();
        return 1;
    }
    public function checkvalidation(Request $request)
    {
        $bundle_tot=$request->bundle_tot;
        $bundle_id=$request->bundle_id;
        $bundle=Bundle::where('id',$bundle_id)->first();
        $package=BundelPackage::where('id',$request->packageid)->first();
        if($bundle->bundles_in_stock<$bundle_tot){
            return json_encode(['result' =>'error','data'=>$bundle]);
        } else {
            return json_encode(['result' =>'success','package'=>$package]);
        }
    }
    public function createfsoshipping(Request $request)
    {
       
        $bundle_tot=$request->bundle_tot;
        $bundle_id=$request->Bundle_Id;
        $ship_cart_qty=$request->ship_qty_tot;
        $FSO_ID=$request->FSO_ID;
        $FBA_asin=$request->FBA_asin;
        $FBA_Shipment_id=$request->FBA_Shipment_id;
        $ship_type=$request->ship_type;
        $barcodefilenewname="";
        $shiplabelnewname="";
        if($request->hasFile('barcode'))
        {
            $barcodefile=$request->file('barcode');
            $barcodefilename=$barcodefile->getClientOriginalName();
            $fileex=explode(".",$barcodefilename);
            $barcodefilenewname=time().".".$fileex[count($fileex)-1];
            $barcodefile->move(public_path('uploads'), $barcodefilenewname);
        }
        if($request->hasFile('shiplabel')) {
            $shiplabel=$request->file('shiplabel');
            $shiplabelname=$shiplabel->getClientOriginalName();
            $fileex=explode(".",$shiplabelname);
            $shiplabelnewname=time()."lb.".$fileex[count($fileex)-1];
            $shiplabel->move(public_path('uploads'), $shiplabelnewname);
        }
        $newshiipingfile=new Shippingfile();
        $newshiipingfile->fso_id=$FSO_ID;
        $newshiipingfile->barcode_label=$barcodefilenewname;
        $newshiipingfile->ship_label=$shiplabelnewname;
        $newshiipingfile->save();
        $packid=$request->packid;
        $cartqty=$request->cartqty;
        $bundle_pack_mc=$request->bundle_pack_mc;
       
        foreach($packid as $key=> $row)
        {
            $shippack=Shippingpackagetran::where('fso_id',$FSO_ID)->where('pack_id',$row)->first();
            if($shippack)
            {
                $shippack->qty=$shippack->qty+$cartqty[$key];  
                $shippack->save();
            } else {
               
                $newshippack=new Shippingpackagetran();  
                $newshippack->pack_id=$row;
                $newshippack->fso_id=$FSO_ID;
                $newshippack->bundle_mc=$bundle_pack_mc[$key];
                $newshippack->qty=$cartqty[$key];    
                $newshippack->save();    
            }
         
        }
       
        $newshipdata=new Shippingplan();
        $newshipdata->Sp_O_id=$FSO_ID;
        $newshipdata->Shipping_method_type_id=$ship_type;
        $newshipdata->bundle_id=$bundle_id;
        $newshipdata->ASIN=$FBA_asin;
        $newshipdata->FBA_PLAN_NUMBER=$FBA_Shipment_id;
        $newshipdata->QTY=$ship_cart_qty;
        $newshipdata->Bundle_QTY=$bundle_tot;
        $newshipdata->status_id=1;
        $newshipdata->save();
        $bundle=Bundle::where('id',$bundle_id)->first();
        $bundle->bundles_in_stock=$bundle->bundles_in_stock-$bundle_tot;
        $bundle->save();
        $bundlelog=new BundleLog();
        $bundlelog->TRANSACTION_TYPE="FBA Shipment";
        $bundlelog->REFERENCE="FSO-".$FSO_ID."-".$newshipdata->id."-BP";
        $bundlelog->CHANCE_QTY=$bundle_tot;
        $bundlelog->Stock_Record=$bundle->bundles_in_stock;
        $bundlelog->TYPE='OUT';
        $bundlelog->Bundle_id=$bundle_id;
        $bundlelog->save();
        return 1;

    } 
    public function checkvalidatship(Request $request){
        $bundle_tot=$request->bundle_tot;
        $FSO_id=$request->FSO_id;
        $bundle_id=$request->bundle_id;
        $packageid=$request->packageid;
        $befbundle_qty=Shippingplan::where('Sp_O_id',$FSO_id)->first()->Bundle_QTY;
        $bundle=Bundle::where('id',$bundle_id)->first();
        $package=BundelPackage::where('id',$request->packageid)->first();
        if($befbundle_qty>=$bundle_tot)
        {
            return json_encode(['result' =>'success','package'=>$package]);
        } else {
            $add_amount=$bundle_tot-$befbundle_qty;
            if($add_amount>$bundle->bundles_in_stock) {
                return json_encode(['result' =>'error','data'=>$bundle]);
            } else {
                return json_encode(['result' =>'success','package'=>$package]);
            }
        }    

    }
    public function editFsoshipping(Request $request) {
        $bundle_tot=$request->bundle_tot;
        $bundle_id=$request->Bundle_Id;
        $ship_cart_qty=$request->ship_qty_tot;
        $FSO_ID=$request->FSO_ID;
        $FBA_asin=$request->FBA_asin;
        $FBA_Shipment_id=$request->FBA_Shipment_id;
        $ship_mod=$request->ship_mod;
        $shipping_cost=$request->shipping_cost;
        $Tracking_number=$request->Tracking_number;
        $status_id=$request->status_id;
        $barcodefilenewname="";
        $shiplabelnewname="";
        $flag=0;
        $editshipplan=Shippingplan::where('Sp_O_id',$FSO_ID)->first();
        if($status_id<$editshipplan->status_id){
            echo 4;
            exit;
        }
        if($status_id==3&&$editshipplan->status_id!=3)
        {
            
            $newinv=new Invoice();
            $newinv->invoice_number=time();
            $newinv->order_id=$editshipplan->Sp_O_id;
            $newinv->client_detail_id=1;
            $newinv->vendor_detail_id=1;
            $newinv->payment_detail_id=1;
            $newinv->status_id=0;
            $newinv->Invoice_total=$shipping_cost;
            $newinv->type='FSO';
            $newinv->save();
            $flag=1;
        }
        $invoice=Invoice::where('order_id',$editshipplan->Sp_O_id)->first();
        if($status_id==4||$status_id==5)
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
        
        if($status_id==6&&($editshipplan->status_id==3||$editshipplan->status_id==4||$editshipplan->status_id==5))
        {
            echo 1;
            exit;
        }

        if($request->hasFile('barcode'))
        {
            $barcodefile=$request->file('barcode');
            $barcodefilename=$barcodefile->getClientOriginalName();
            $fileex=explode(".",$barcodefilename);
            $barcodefilenewname=time().".".$fileex[count($fileex)-1];
            $barcodefile->move(public_path('uploads'), $barcodefilenewname);
        }
        if($request->hasFile('shiplabel')) {
            $shiplabel=$request->file('shiplabel');
            $shiplabelname=$shiplabel->getClientOriginalName();
            $fileex=explode(".",$shiplabelname);
            $shiplabelnewname=time()."lb.".$fileex[count($fileex)-1];
            $shiplabel->move(public_path('uploads'), $shiplabelnewname);
        }
        $editshiipingfile=Shippingfile::where('fso_id',$FSO_ID)->first();
        if($barcodefilenewname!=""){
            $editshiipingfile->barcode_label=$barcodefilenewname;
        } 
        if($shiplabelnewname!=""){
            $editshiipingfile->ship_label=$shiplabelnewname;
        }
        $editshiipingfile->save();
        
        $packid=$request->packid;
        $cartqty=$request->cartqty;
        $bundle_pack_mc=$request->bundle_pack_mc;
      
        Shippingpackagetran::where('fso_id',$FSO_ID)->delete();
        
        foreach($packid as $key=> $row)
        {
            $shippack=Shippingpackagetran::where('fso_id',$FSO_ID)->where('pack_id',$row)->first();
            if($shippack)
            {
                $shippack->qty=$shippack->qty+$cartqty[$key];  
                $shippack->save();
            } else {
               
                $newshippack=new Shippingpackagetran();  
                $newshippack->pack_id=$row;
                $newshippack->fso_id=$FSO_ID;
                $newshippack->bundle_mc=$bundle_pack_mc[$key];
                $newshippack->qty=$cartqty[$key];    
                $newshippack->save();    
            }
         
        }
       
        
        if($bundle_tot>$editshipplan->Bundle_QTY){
            $bundle=Bundle::where('id',$bundle_id)->first();
            $minus=$bundle_tot-$editshipplan->Bundle_QTY;
            $bundle->bundles_in_stock=$bundle->bundles_in_stock-$minus;
            $bundle->save();
            $bundlelog=new BundleLog();
            $bundlelog->TRANSACTION_TYPE="FBA Shipment";
            $bundlelog->REFERENCE="FSO-".$FSO_ID."-".$editshipplan->id."-BP";
            $bundlelog->CHANCE_QTY=$bundle_tot-$editshipplan->Bundle_QTY;
            $bundlelog->Stock_Record=$bundle->bundles_in_stock;
            $bundlelog->TYPE='OUT';
            $bundlelog->Bundle_id=$bundle_id;
            $bundlelog->save();
        } else {
            if($bundle_tot<$editshipplan->Bundle_QTY) {
                $bundle=Bundle::where('id',$bundle_id)->first();
                $plus=$editshipplan->Bundle_QTY-$bundle_tot;
                $bundle->bundles_in_stock=$bundle->bundles_in_stock+$plus;
                $bundle->save();
                $bundlelog=new BundleLog();
                $bundlelog->TRANSACTION_TYPE="FBA Shipment";
                $bundlelog->REFERENCE="FSO-".$FSO_ID."-".$editshipplan->id."-BP";
                $bundlelog->CHANCE_QTY=$editshipplan->Bundle_QTY-$bundle_tot;
                $bundlelog->Stock_Record=$bundle->bundles_in_stock;
                $bundlelog->TYPE='IN';
                $bundlelog->Bundle_id=$bundle_id;
                $bundlelog->save();
            }
        }
       
        $editshipplan->Sp_O_id=$FSO_ID;
        $editshipplan->Shipping_method_id=$ship_mod;
        $editshipplan->bundle_id=$bundle_id;
        $editshipplan->ASIN=$FBA_asin;
        $editshipplan->FBA_PLAN_NUMBER=$FBA_Shipment_id;
        $editshipplan->QTY=$ship_cart_qty;
        $editshipplan->Bundle_QTY=$bundle_tot;
        $editshipplan->status_id=$status_id;
        $editshipplan->Tracking_num=$Tracking_number;
        $editshipplan->cost=$shipping_cost;
        $editshipplan->save();
       if($status_id==6){
            $bundle=Bundle::where('id',$bundle_id)->first();
            $bundle->bundles_in_stock=$bundle->bundles_in_stock+$editshipplan->Bundle_QTY;
            $bundle->save();
            $bundlelog=new BundleLog();
            $bundlelog->TRANSACTION_TYPE="FBA Shipment";
            $bundlelog->REFERENCE="FSO-".$FSO_ID."-".$editshipplan->id."-BP";
            $bundlelog->CHANCE_QTY=$editshipplan->Bundle_QTY;
            $bundlelog->Stock_Record=$bundle->bundles_in_stock;
            $bundlelog->TYPE='IN';
            $bundlelog->Bundle_id=$bundle_id;
            $bundlelog->save();
       }
       if($flag==1) 
       {
          echo 6;
       } else 
       {
          echo 5;  
       }
       
    }
    public function submitnote(Request $request)
    {
        $notes=$request->comment;
        $poid=$request->shipid;
        $userid = Auth::id();
        $ordernote=new Shipsubnote();
        $ordernote->user_id=$userid;
        $ordernote->ship_id=$poid;
        $ordernote->comment=$notes;
        $ordernote->save();
        return redirect()->back();
    }
    
}
