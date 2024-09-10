<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Invoice::with('user')->with('invoiceProducts')->latest()->get();
        return view('dashboard.order.index',compact('orders'));
    }    
    
    public function newOrder(){
        $orders = Invoice::where('status','new')->with('user')->with('invoiceProducts')->latest()->get();
        return view('dashboard.order.new',compact('orders'));
    }    


    public function deliveryInProcess(){
        $orders = Invoice::where('status','delevery-in-process')->with('user')->with('invoiceProducts')->latest()->get();
        return view('dashboard.order.delivery-in-process',compact('orders'));
    }

    public function complateOrder(){
        $orders = Invoice::where('status','complete')->with('user')->with('invoiceProducts')->latest()->get();
        return view('dashboard.order.complete',compact('orders'));
    }

    public function cancelOrder(){
        $orders = Invoice::where('status','cancel')->with('user')->with('invoiceProducts')->latest()->get();
        return view('dashboard.order.cancel',compact('orders'));
    }


    public function orderStatus(Request $request, $id){
        Invoice::where('id',$id)->update([
            'payment' => $request->input('payment'),
            'status' => $request->input('status'),
        ]);
        toast('Order Status Update!','success');
        return back();
    }

    public function orderInvoice($id){
        $invoice = Invoice::where('id',$id)->with('user','invoiceProducts')->first();
        return view('dashboard.order.invoice',compact('invoice'));
    }
}
