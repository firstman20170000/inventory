<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryRecordModel;
use App\Inventorymodel;
class InventoryRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CHANCE_QTY'=>'required',
            'REFERENCE'=>'required',
            'TYPE'=>'required',
            'TRANSACTION_TYPE'=>'required',
            'Item_id'=>'required'
        ]);

        $latestItem = InventoryRecordModel::orderBy('created_at', 'desc')->where('Item_id',$request->get('Item_id'))->first();
	$proitem=Inventorymodel::where('id',$request->get('Item_id'))->first();
        if(intval($request->get('CHANCE_QTY')) < "0"){
            echo "3";

        }
        else{
            if(empty($latestItem)) {
                if($request->get('TYPE') == 'OUT'){
                    echo "1";
                }
                else{

                    $modify = new InventoryRecordModel([
                        'Item_id' => $request->get('Item_id'),
                        'REFERENCE' => $request->get('REFERENCE'),
                        'CHANCE_QTY' => $request->get('CHANCE_QTY'),
                        'TRANSACTION_TYPE' => $request->get('TRANSACTION_TYPE'),
                        'Stock_Record' => $request->get('CHANCE_QTY'),
                        'TYPE' => $request->get('TYPE')

                    ]);
		    $proitem->Units_in_Stock=$proitem->Units_in_Stock+$request->get('CHANCE_QTY');
		    $proitem->save();
                    $modify->save();
                    echo "2";
                }
            }
            else {

                if($request->get('TYPE') == 'IN') {
                    $new_stock_record = $latestItem->Stock_Record + $request->get('CHANCE_QTY');
		    $proitem->Units_in_Stock=$proitem->Units_in_Stock+$request->get('CHANCE_QTY');
		    $proitem->save();

                }
                else if($request->get('TYPE') == 'OUT')
                {

                    $data = intval($request->get('CHANCE_QTY'));
                    $data1 = $latestItem->Stock_Record;

                    if($data > $data1){
                        echo "1"; exit;
                    }
                    else
                    {
                        $new_stock_record = $latestItem->Stock_Record - $request->get('CHANCE_QTY');
			 $proitem->Units_in_Stock=$proitem->Units_in_Stock-$request->get('CHANCE_QTY');
		    	 $proitem->save();

			
                    }
                }
                else{

                }

                $modify = new InventoryRecordModel([
                    'Item_id' => $request->get('Item_id'),
                    'REFERENCE' => $request->get('REFERENCE'),
                    'CHANCE_QTY' => $request->get('CHANCE_QTY'),
                    'TRANSACTION_TYPE' => $request->get('TRANSACTION_TYPE'),
                    'Stock_Record' => $new_stock_record,
                    'TYPE' => $request->get('TYPE')

                    ]);
                $modify->save();
                echo "2";


            }
        }

            // return redirect('/items')->with('success', 'Stock has been added');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
