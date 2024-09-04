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

        \Stripe\Stripe::setApiKey(config('stripe.STRIPE_SECRET'));
        $response = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Invoice ID: ' . lastInvoiceIdByUser(),
                        ],
                        'unit_amount' => payTotal()*100,
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
        $invoiceId =lastInvoiceIdByUser();

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
        $invoiceId =lastInvoiceIdByUser();
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

        //Data For OrderSuccessfull
        $OrderSuccessData['user_name'] = $request->user()->name;
        $OrderSuccessData['total_amount'] = Invoice::where('id',$invoiceId)->first()->total;
        $OrderSuccessData['payment_method'] = 'Paypal';
        $OrderSuccessData['payment_status'] = Invoice::where('id',$invoiceId)->first()->payment;
        $OrderSuccessData['order_status'] = Invoice::where('id',$invoiceId)->first()->status;
        $OrderSuccessData['order_date'] = Invoice::where('id',$invoiceId)->first()->created_at;

        mailServer();
        Mail::to($request->user())->send(new InvoiceEmail($data));
        Mail::to($request->user())->send(new OrderSuccessfull($OrderSuccessData));

        Session::forget('cart');
        toast('Payment failed!','error')->width('300');
        return redirect(route('shop'));
    }


}
