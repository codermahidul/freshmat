<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceEmail;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function payment(Request $request){
        dd($request->all());
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

        $cartItems = Session::get('cart');

        if (!is_null($cartItems)) {
            foreach ($cartItems as $cart) {
                InvoicesProducts::insert([
                    'productId' => $cart['productId'],
                    'invoiceId' => $invoiceId,
                    'quantity' => $cart['quantity'],
                ]);
            }
        }

        if (Session::has('coupon')) {
            $couponName = Session::get('coupon')['couponName'];
            Coupon::where('name',$couponName)->decrement('limit');
            Session::forget('coupon');
        }

        $data['invoice'] = Invoice::where('id',$invoiceId)->first();
        $data['invoiceProduct'] = InvoicesProducts::where('invoiceId',$invoiceId)->get();
        $data['name'] = $request->user()->name;
        mailServer();
        Mail::to($request->user())->send(new InvoiceEmail($data));

        Session::forget('cart');
        return redirect(route('orderInvoice',$invoiceId));
    }
}
