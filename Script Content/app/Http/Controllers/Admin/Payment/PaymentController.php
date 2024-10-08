<?php

namespace App\Http\Controllers\Admin\Payment;
use App\Http\Controllers\Controller;

use App\Mail\InvoiceEmail;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\UserProfile;
use App\Models\Paypal;
use App\Models\Stripe;
use App\Models\Mollie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function payment(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'charge' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        UserProfile::where('userId', Auth::id())->update([
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
        ]);

        $invoiceId = DB::table('invoices')->insertGetId([
            'userId' => Auth::id(),
            'invoiceNumber' => 1000+lastInvoiceId(),
            'subTotal' => subTotal(),
            'discount' => discount(),
            'deliveryCharge' => $request->input('charge'),
            'total' => (subTotal()-discount())+$request->input('charge'),
            'note' => $request->input('note'),
            'status' => 'new',
        ]);

        return redirect()->route('getway');

     }


     public function getway(){
        $paypal = Paypal::where('id',1)->first();
        $stripe = Stripe::where('id',1)->first();
        $mollie = Mollie::where('id',1)->first();
        $deliveryCharge =  Invoice::where('userId',Auth::user()->id)->latest()->first()->deliveryCharge;
        return view('frontend.pages.getway',compact(['deliveryCharge','paypal','stripe','mollie']));
     }

}
