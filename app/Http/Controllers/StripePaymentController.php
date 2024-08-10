<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceEmail;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    public function payment(Request $request)
    {
        //Basic Works
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

        \Stripe\Stripe::setApiKey(config('stripe.STRIPE_SECRET'));
        $total = (subTotal()-discount())+$request->input('charge');
        $response = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Invoice ID: ' . (1000 + lastInvoiceId()),
                        ],
                        'unit_amount' => $total*100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('stirpe.success'),
            'cancel_url' => route('stirpe.cancel'),
        ]);
       // $redirectURL = $response->url . '?invoice_id=' . urlencode($invoiceId);
        return redirect()->away($response->url);
    }

    public function success(Request $request)
    {
        $invoiceId =lastInvoiceId()-1;

        Invoice::where('id',$invoiceId)->update([
            'payment' => 'success',
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
        toast('Payment Success!','success')->width('350');
        return redirect(route('orderInvoice',$invoiceId));
    }


    public function cancel()
    {
        $invoiceId =lastInvoiceId()-1;
        Invoice::where('id',$invoiceId)->update([
            'payment' => 'pending',
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
        toast('Payment failed!','error')->width('300');
        return redirect(route('shop'));
    }


}
