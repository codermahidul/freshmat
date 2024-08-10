<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Mail\InvoiceEmail;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PaypalPaymentController extends Controller
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


        $provider = new PayPalClient;

        $provider->setApiCredentials(config('paypal'));

        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => route('paypal.success'),
                'cancel_url' => route('paypal.cancel'),
            ],
            'purchase_units' =>[
                [
                    "amount" => [
                        "currency_code" => 'USD',
                        'value' => (subTotal()-discount())+$request->input('charge'),
                    ]
                ]
            ],
        ]);

        if (isset($response['id']) & $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }else{
            return redirect()->route('paypal.cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;

        $provider->setApiCredentials(config('paypal'));

        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        $invoiceId =lastInvoiceId()-1;

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
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
        }else{
            return redirect()->route('paypal.cancel');
        }

    }


    public function cancel(Request $request)
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
