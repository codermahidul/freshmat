<?php

namespace App\Http\Controllers\Admin\Payment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Mail\InvoiceEmail;
use App\Models\Coupon;
use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MolliePaymentController extends Controller
{

    public function payment(){
        $invoiceId =lastInvoiceIdByUser();
        $payment = Mollie::api()->payments->create([
        "amount" => [
            "currency" => "USD",
            "value" => number_format(payTotal(),2,'.',''),
        ],
        "description" => "Invoice ".$invoiceId,
        "redirectUrl" => route('mollie.success'),
        // "webhookUrl" => route('mollie.cancel'),
        "metadata" => [
            "order_id" => $invoiceId,
        ],
    ]);

    session()->put('mollie_id', $payment->id);

    // redirect customer to Mollie checkout page
    return redirect($payment->getCheckoutUrl(), 303);

    }


    public function success(){
        $paymentId = session()->get('mollie_id');
        $payment = Mollie::api()->payments->get($paymentId);

        if ($payment->isPaid())
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
            $data['name'] = Auth::user()->name;

            //Data For OrderSuccessfull
            $OrderSuccessData['user_name'] = $request->user()->name;
            $OrderSuccessData['total_amount'] = Invoice::where('id',$invoiceId)->first()->total;
            $OrderSuccessData['payment_method'] = 'Paypal';
            $OrderSuccessData['payment_status'] = Invoice::where('id',$invoiceId)->first()->payment;
            $OrderSuccessData['order_status'] = Invoice::where('id',$invoiceId)->first()->status;
            $OrderSuccessData['order_date'] = Invoice::where('id',$invoiceId)->first()->created_at;

            mailServer();
            Mail::to(Auth::user())->send(new InvoiceEmail($data));
            Mail::to($request->user())->send(new OrderSuccessfull($OrderSuccessData));

            Session::forget('cart');
            toast(trans('Payment Success!'),'success')->width('350');
            return redirect(route('orderInvoice',$invoiceId));

    }else{
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
        $data['name'] = Auth::user()->name;
        mailServer();
        Mail::to(Auth::user())->send(new InvoiceEmail($data));

        Session::forget('cart');
        toast(trans('Payment failed!'),'error')->width('300');
        return redirect(route('shop'));

    }


    }


}
