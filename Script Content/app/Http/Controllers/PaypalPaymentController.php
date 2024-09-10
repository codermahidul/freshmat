<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Mail\InvoiceEmail;
use App\Mail\OrderSuccessfull;
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
                        'value' => payTotal(),
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

        $invoiceId =lastInvoiceIdByUser();

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
            toast('Payment Success!','success')->width('350');
            return redirect(route('orderInvoice',$invoiceId));
        }else{
            return redirect()->route('paypal.cancel');
        }

    }


    public function cancel(Request $request)
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
        mailServer();
        Mail::to($request->user())->send(new InvoiceEmail($data));

        Session::forget('cart');
        toast('Payment failed!','error')->width('300');
        return redirect(route('shop'));
    }
}
