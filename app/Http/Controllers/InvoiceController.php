<?php

namespace App\Http\Controllers;
use App\Inventorymodel;
use Illuminate\Http\Request;
use App\Invoice;
use App\Clientdetail;
use App\PaymentDetail;
use App\VendorDetail;
use App\Purchase;
use App\Shippingplan;
use App\Dropshipment;
use App\Stockorder;
class InvoiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewinvoice(Request $request)
    {
        return view('invoice-table');
    }
    public function getinvoice($id,Request $request)
    {
        $invoice=Invoice::where('id',$id)->first();
        if($invoice->type=='po')
        {
            $po_num=$invoice->order_id;
            $purchase=Purchase::where('po_number',$po_num)->first();
            $goods=Inventorymodel::where('Item_ID',$purchase->item_id)->first();
            $client_detail=Clientdetail::where('id',$invoice->client_detail_id)->first();
            $payment_detail=PaymentDetail::where('id',$invoice->payment_detail_id)->first();
            $vendor_detail=VendorDetail::where('id',$invoice->vendor_detail_id)->first();
            return view('invoice-view',['invoice'=>$invoice,'payment_detail'=>$payment_detail,'vendor_detail'=>$vendor_detail,'Item'=>$purchase,'cogood'=>$goods,'client_detail'=>$client_detail]);   
        }
        if($invoice->type=='mtso')
        {
            $mtso_num=$invoice->order_id;
            $st_order=Stockorder::where('MTSO_NUMBER',$mtso_num)->first();
            $client_detail=Clientdetail::where('id',$invoice->client_detail_id)->first();
            $payment_detail=PaymentDetail::where('id',$invoice->payment_detail_id)->first();
            $vendor_detail=VendorDetail::where('id',$invoice->vendor_detail_id)->first();
            return view('invoice-mtso-view',['stock'=>$st_order,'invoice'=>$invoice,'payment_detail'=>$payment_detail,'vendor_detail'=>$vendor_detail,'client_detail'=>$client_detail]);
        }
        if($invoice->type=='DSO')
        {
            $shipment=Dropshipment::where('dropship_number',$invoice->order_id)->first();
            $client_detail=Clientdetail::where('id',$invoice->client_detail_id)->first();
            $payment_detail=PaymentDetail::where('id',$invoice->payment_detail_id)->first();
            $vendor_detail=VendorDetail::where('id',$invoice->vendor_detail_id)->first();
            return view('invoice-DSO-view',['shipment'=>$shipment,'invoice'=>$invoice,'payment_detail'=>$payment_detail,'vendor_detail'=>$vendor_detail,'client_detail'=>$client_detail]);
        }
        if($invoice->type='FSO')
        {
            $shipment=Shippingplan::where('Sp_O_id',$invoice->order_id)->first();
            $client_detail=Clientdetail::where('id',$invoice->client_detail_id)->first();
            $payment_detail=PaymentDetail::where('id',$invoice->payment_detail_id)->first();
            $vendor_detail=VendorDetail::where('id',$invoice->vendor_detail_id)->first();
            return view('invoice-FSO-view',['shipment'=>$shipment,'invoice'=>$invoice,'payment_detail'=>$payment_detail,'vendor_detail'=>$vendor_detail,'client_detail'=>$client_detail]);

        }
    }
    public function getinvoicedata(Request $request)
    {
        $invoice=Invoice::orderBy('id','desc')->get();    
        return json_encode(['data'=>$invoice]);
    } 
    public function updateinvoice(Request $request)
    {
        $pay_status=$request->paystatus;
        $inv_id=$request->invoiceid;
        $invoice=Invoice::where('id',$inv_id)->first();
        $invoice->status_id=$pay_status;
        $invoice->save();
        return redirect('/view/inovice/table');
    }  
}
