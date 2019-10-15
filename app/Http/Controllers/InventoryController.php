<?php

namespace App\Http\Controllers;

use App\InventoryFileModel;
use Illuminate\Http\Request;
use App\InventoryRecordModel;
use Illuminate\Support\Facades\DB;

use App\Inventorymodel;
use App\Itemnote;
use Illuminate\Support\Facades\Auth;
class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('items');

    }
    //get database
    public function get()
    {

        $datas = Inventorymodel::orderBy('id','desc')->get();
        $data1 = InventoryRecordModel::all();
        $data1 = DB::select( "SELECT Item_id FROM items_inv_logs order by id desc");
        foreach($datas as $index => $data){
            $stock_sum = DB::table('items_inv_logs')
            ->where('Item_id', '=', $data->id)->where('TYPE', '=', 'IN')->select('CHANCE_QTY')
            ->sum('CHANCE_QTY');
            $stock_minus = DB::table('items_inv_logs')
            ->where('Item_id', '=', $data->id)->where('TYPE', '=', 'OUT')->select('CHANCE_QTY')
            ->sum('CHANCE_QTY');
	    $data->stock=$stock_sum-$stock_minus;
            $datas[$index] = $data;
        }


        return json_encode(['data' => $datas,
                            'data1' => $data1]);
        // return json_encode(['data' => $datas,
        //     ]);

    }
    //default page
    public function default(){
        return view('items_index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('create-item');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'Item_Name' => 'required',
            'Item_description' => 'required',
            'Item_ID' => 'required',
            'Item_Weight' => 'required',
            'Item_Length' => 'required',
            'Item_Width' => 'required',
            'Image_Url' => 'required',
            'Item_Height' => 'required',
			      'Purchase_Fee' => 'required',
			      'EST_COST' => 'required',
            'MOQ' => 'required',
            'LEAD_TIME' => 'required',
            'Units_in_Stock' => 'required'

		]);

        $item = Inventorymodel::create($validatedData);


        if($request->hasFile('files')){

            foreach ( $request->file('files') as $file){

                $fileName =$file->getClientOriginalName();


                $file->move(public_path('uploads'), $fileName);

                $newfile = 'uploads/'.$fileName;
                InventoryFileModel::create([
                    'Item_id' => $item->id,
                    'filename' => $newfile
                ]);


            }
        }

         return "successfully";

	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  Inventorymodel::find($id);
        $userid=Auth::user()->id;
        $data1 = InventoryFileModel::where('Item_id', $data->id)->get();
        $data_record = InventoryRecordModel::where('Item_id', $data->id)->get();
        $notes=Itemnote::where('userid',$userid)->where('item_id',$id)->get();
        return view('create-item-view', [
            'data' => $data,
            'data1' => $data1,
            'data_record' => $data_record,
            'id'=>$id,
            'note'=>$notes
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filedata=InventoryFileModel::where('Item_id', $id)->get();
        $data =  Inventorymodel::find($id);
		    return view('items_edit', ['data'=>$data,'filedata'=>$filedata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $imageName="";
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
            'Item_Name' => 'required',
            'Item_description' => 'required',
            'Item_ID' => 'required',
            'Item_Weight' => 'required',
            'Item_Length' => 'required',
            'Item_Width' => 'required',
            'Item_Height' => 'required',
            
			'Purchase_Fee' => 'required',
			'EST_COST' => 'required',
            'MOQ' => 'required',
            'LEAD_TIME' => 'required',
            // 'Units_in_Stock' => 'required'

		]);

        // $inventory = Inventorymodel::create($validatedData);
        ;
     
        $inventory = Inventorymodel::whereId($request->id)->update($validatedData);
       $inv=Inventorymodel::where('id',$request->id)->first();
       if($imageName!="")
       {
          $inv->Image_Url=$imageName;
          $inv->save();
       }
        if($request->hasFile('files')){
            
            foreach ( $request->file('files') as $file){

                $fileName =$file->getClientOriginalName();

                $file->move(public_path('uploads'), $fileName);

                $newfile = 'uploads/'.$fileName;
      
                InventoryFileModel::create([
                    'Item_id' => $request->id,
                    'filename' => $newfile
                ]);
                // InventoryFileModel::whereId($inventory->id)->update($data);


            }
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Inventorymodel::find($id);
        $post->delete();
        return view('items');

    }
    public function postitemnote(Request $request)
    {
         $userid=Auth::user()->id;
         $comment=$request->comment;
         $itemid=$request->itemid;
         $itemnote=new Itemnote();
         $itemnote->comment=$comment;
         $itemnote->item_id=$itemid;
         $itemnote->userid=$userid;
         $itemnote->save();
         return redirect()->back();
    }
    public function deletefile(Request $request)
    {
        $fileid=$request->id;
        InventoryFileModel::where('id',$fileid)->delete();
        return 1;
    }
}
