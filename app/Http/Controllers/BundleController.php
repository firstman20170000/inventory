<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bundle;
use App\BundleFileModel;
use App\BundleItem;
use App\Inventorymodel;
use Illuminate\Support\Facades\Auth;
use App\BundleNote;
use App\BundelPackage;
use App\BundleLog;
use Redirect;
class BundleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewbundle(Request $request)
    {
        return view('bundle-table');
    }
    public function vieweachbundle($id,Request $request)
    {
         $bundle_item=BundleItem::where('bundle_id',$id)->get();
         $est_cost=0;
         foreach($bundle_item as $key => $row)
         {
              $item=Inventorymodel::where('id',$row->item_id)->first();
              $est_cost=$est_cost+$item->EST_COST*$row->qty_in_bundle*(100+$item->Purchase_Fee)/100;
         }
         $bundle=Bundle::where('id',$id)->first();
         if($est_cost>0)
         {
            $est_cost=$est_cost+$bundle->bundling_fee;
         }
         $file=BundleFileModel::where('bundle_id',$bundle->id)->get();
         $bundle->est_cost=$est_cost;
         $userid = Auth::id();
         $items=Inventorymodel::all();
         $itemarray=[];
         $index=0;
         foreach($items as $key => $row)
         {
            $bundleitem=BundleItem::where('item_id',$row->id)->where('bundle_id',$id)->get();
            if(count($bundleitem)==0){
              $itemarray[$index]=$row;
              $index++;
            }
         }
         $data=BundleLog::where('Bundle_id',$id)->get();
         $bundlenote=BundleNote::where('user_id',$userid)->where('bundle_id',$id)->get();
         $bundleitem=BundleItem::where('bundle_id',$id)->get();
         $bundlepack=BundelPackage::where('bundle_id',$id)->get();
         $bundle_item=array();
         foreach($bundleitem as $key => $row)
         {
            $item=Inventorymodel::where('id',$row->item_id)->first();
            $item->qty=$row->qty_in_bundle;
            $item->bundleitem_id=$row->id;
            $bundle_item[$key]=$item;
         }
         return view('bundle-view',['bundle_item'=>$bundle_item,'data_record'=>$data,'bundle'=>$bundle,'items'=>$itemarray,'file'=>$file,'bundlepack'=>$bundlepack,'bundlenote'=>$bundlenote]);
    }
    public function getbundle(Request $request)
    {
         $bundle=Bundle::orderBy('id','desc')->get();
         foreach($bundle as $key => $row)
         {
             $bundle_id=$row->id;
             $bundle_item=BundleItem::where('bundle_id',$bundle_id)->get();
             $est_cost=0;
             $row->est_cost=0;
             foreach($bundle_item as $key1 => $row1)
             {
                $item=Inventorymodel::where('id',$row1->item_id)->first();
                $est_cost=$est_cost+$item->EST_COST*$row1->qty_in_bundle*(100+$item->Purchase_Fee)/100;
             }
             if($est_cost>0)
             {
                $est_cost=$est_cost+$row->bundling_fee;
                $row->est_cost=$est_cost;
             }
         }

         return json_encode(['data' => $bundle]);

    }
    public function createbundle(Request $request)
    {       
        return view('bundle-create');
    }
    public function deletebundlefile(Request $request)
    {
       $fileid=$request->id;
       BundleFileModel::where('id',$fileid)->delete();
       return 1;
       
    }
    public function postbundle(Request $request)
    {
        
        if($request->hasFile('image')) {
			request()->validate([
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('image');

            $new_name = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $new_name);

			$imageName = 'uploads/'.$new_name;

			$request->merge([
				'Image_Url' => $imageName
            ]);

        }
        
        $validatedData = $request->validate([
            'Bundle_Name' => 'required',
            'Bundle_description' => 'required',
            'Bundle_Id' => 'required',
            'Bundle_Weight' => 'required',
            'Bundle_Length' => 'required',
            'Bundle_Width' => 'required',
            'Bundle_Height' => 'required',
            'Image_Url' => 'required',
			'Bundle_Fee' => 'required',
            'Bundle_Model' => 'required',
            'Bundle_turn_time'=>'required',
            'Units_in_Stock' => 'required'

        ]);
       
        $bundle=new Bundle();
        $bundle->bundle_id=$request->Bundle_Id;
        $bundle->bundle_name=$request->Bundle_Name;
        $bundle->bundle_description=$request->Bundle_description;
        $bundle->bundle_weight=$request->Bundle_Weight;
        $bundle->bundle_height=$request->Bundle_Height;
        $bundle->bundle_length=$request->Bundle_Length;
        $bundle->bundle_width=$request->Bundle_Width;
        $bundle->image_url=$request->Image_Url;
        $bundle->bundling_fee=$request->Bundle_Fee;
        $bundle->turnaround=$request->Bundle_turn_time;
        $bundle->bundles_in_stock=$request->Units_in_Stock;
        $bundle->bundle_model=$request->Bundle_Model;
        $bundle->save();
        
        if($request->hasFile('files')){

            foreach ( $request->file('files') as $file){

                $fileName =$file->getClientOriginalName();


                $file->move(public_path('uploads'), $fileName);

                $newfile = 'uploads/'.$fileName;
                BundleFileModel::create([
                    'bundle_id' => $bundle->id,
                    'filename' => $newfile
                ]);


            }
        }

         return "successfully";
    }
    public function postnote(Request $request)
    {
        $comment=$request->comment;
        $userid = Auth::id();
        $bundle_id=$request->bundle_id;
        $newnote=new BundleNote();
        $newnote->bundle_id=$bundle_id;
        $newnote->user_id=$userid;
        $newnote->comment=$comment;
        $newnote->save();
        return redirect()->back();
        
    }
    public function updatebundle_items(Request $request)
    {
        $qty=$request->CHANCE_QTY;
        $item=$request->TYPE;
        $bundle_id=$request->bundleid;
        $new_bundle=new BundleItem();
        $new_bundle->bundle_id=$bundle_id;
        $new_bundle->item_id=$item;
        $new_bundle->qty_in_bundle=$qty;
        $new_bundle->save();
        $newitem=Inventorymodel::where('id',$item)->first();
        $newitem->qty=$qty;
        return $newitem;
    }
    public function deletebundle_items(Request $request)
    {
        $id=$request->deleid;
        BundleItem::where('id',$id)->delete();
        return 1;
    }   
    public function postpackage(Request $request)
    {
        $new_package=new BundelPackage();
        $new_package->bundle_id=$request->bundleid;
        $new_package->qty_in_mc=$request->pack_qty;
        $new_package->mc_weight=$request->pack_weight;
        $new_package->mc_length=$request->pack_length;
        $new_package->mc_height=$request->pack_height;
        $new_package->mc_width=$request->pack_width;
        $new_package->save();
    }
    public function deletepack(Request $request)
    {
        $packid=$request->packid;
        BundelPackage::where('id',$packid)->delete();
        return 1;
    }
    public function editbundle($id,Request $request)
    {
        $bundle=Bundle::where('id',$id)->first();
        $filelist=BundleFileModel::where('bundle_id',$id)->get();
        return view('bundle-edit',['bundle'=>$bundle,'filelist'=>$filelist]);
    }
    public function updatebundle(Request $request)
    {
         $imagefile=$request->file('image');
         $bundlename=$request->Bundle_Name;
         $Bundle_description=$request->Bundle_description;
         $Bundle_turn_time=$request->Bundle_turn_time;
         $Bundle_Model=$request->Bundle_Model;
         $Bundle_Fee=$request->Bundle_Fee;
         $Bundle_Width=$request->Bundle_Width;
         $Bundle_Height=$request->Bundle_Height;
         $Bundle_id=$request->bundleid;
         $Bundle_Length=$request->Bundle_Length;
         $Bundle_Weight=$request->Bundle_Weight;
         //file upload part
         $filename="";
         if($imagefile)
         {
            request()->validate([
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $filename=$imagefile->getClientOriginalName();
            $fileextension=explode(".",$filename);
            $ex=$fileextension[count($fileextension)-1];
            $t=time();
            $newfilename=$t.".".$ex;
            $imagefile->move(public_path('uploads'), $newfilename);
            $filename = 'uploads/'.$newfilename;
         } 
         $bundle=Bundle::where('id',$Bundle_id)->first();
         $bundle->bundle_name=$bundlename;
         $bundle->bundle_description=$Bundle_description;
         $bundle->bundle_weight=$Bundle_Weight;
         $bundle->bundle_height=$Bundle_Height;
         $bundle->bundle_length=$Bundle_Length;
         $bundle->bundle_width=$Bundle_Width;               
         $bundle->bundling_fee=$Bundle_Fee;
         $bundle->turnaround=$Bundle_turn_time;
         $bundle->bundle_model=$Bundle_Model;
         if($filename!="") {
            $bundle->image_url=$filename;
         }
         $bundle->save();
         
         if($request->hasFile('files')){
           
            foreach ( $request->file('files') as $file){

                $fileName =$file->getClientOriginalName();

                $file->move(public_path('uploads'), $fileName);

                $newfile = 'uploads/'.$fileName;
      
                BundleFileModel::create([
                    'bundle_id' => $Bundle_id,
                    'filename' => $newfile
                ]);
                // InventoryFileModel::whereId($inventory->id)->update($data);


            }
        }
         return  Redirect::back()->with('msg', 'successfully updated');
    }
    public function manubundle(Request $request)
    {
        $manu_qty=$request->Manu_QTY;
        $Manu_REFERENCE=$request->Manu_REFERENCE;
        $Manu_TYPE=$request->Manu_TYPE;
        $Bundle_id=$request->Bundle_id;
        $TRANSACTION_TYPE=$request->TRANSACTION_TYPE;
        $Stock=$request->Stock;
        $bundle=Bundle::where('id',$Bundle_id)->first();
        $lastlog=BundleLog::orderBy('created_at','desc')->where('Bundle_id',$Bundle_id)->first();
        if($manu_qty<0) {
          echo 3;
        } else {
           if(empty($lastlog)){
              if($Manu_TYPE== "OUT") {
                   echo "1";
              } else {
                  $newlogitem=new BundleLog();
                  $newlogitem->bundle_id=$Bundle_id;
                  $newlogitem->TRANSACTION_TYPE=$TRANSACTION_TYPE;
                  $newlogitem->REFERENCE=$Manu_REFERENCE;
                  $newlogitem->TYPE=$Manu_TYPE;
                  $newlogitem->CHANCE_QTY=$manu_qty;
                  $newlogitem->Stock_Record=$manu_qty;
                  $bundle->bundles_in_stock=$manu_qty;
                  $bundle->save();
                  $newlogitem->save();
                  echo "2";
              }
           } else {
              if($Manu_TYPE== "IN"){
                   $new_stock=$lastlog->Stock_Record+$manu_qty;
                   $bundle->bundles_in_stock=$new_stock;
                   $bundle->save();
              } else if($Manu_TYPE== "OUT") {
                   $cur_stock=$lastlog->Stock_Record;
                   if($manu_qty>$cur_stock) {
                      echo "1";
                      exit;
                   } else {
                     $new_stock=$lastlog->Stock_Record-$manu_qty;
                     $bundle->bundles_in_stock=$new_stock;
                     $bundle->save();
                   }
                } else {
                  
                }
                  $newlogitem=new BundleLog();
                  $newlogitem->bundle_id=$Bundle_id;
                  $newlogitem->TRANSACTION_TYPE=$TRANSACTION_TYPE;
                  $newlogitem->REFERENCE=$Manu_REFERENCE;
                  $newlogitem->TYPE=$Manu_TYPE;
                  $newlogitem->CHANCE_QTY=$manu_qty;
                  $newlogitem->Stock_Record=$new_stock;
                  $newlogitem->save();
                  echo 2;
               
           } 
           
        }
         
    }

   

}
