<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use App\Models\Paypal;
use App\Models\Stripe;
use App\Models\Mollie;

class PaymentGetwayController extends Controller
{
    public function index(){
        $paypal = Paypal::where('id',1)->first();
        $stripe = Stripe::where('id',1)->first();
        $mollie = Mollie::where('id',1)->first();
        return view('dashboard.paymentGetway.index',compact(['paypal','stripe','mollie']));
    }

    public function paypalUpdate(Request $request){

        $request->validate([
            'status' => 'required',
            'accountMode' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $image = $paypal = Paypal::where('id',1)->first()->image;

        if ($image != 'default/paymentGetway/paypal.jpg') {
            unlink(base_path('public/'.$image));
        }

        if ($request->file('image')) {
                $manager = new ImageManager(new Driver());
                $newImage = $request->file('image');
                $name = 'paypal-payment-getway'.'.'.$newImage->getClientOriginalExtension();
                $img = $manager->read($newImage);
                $img = $img->resize(200,120);
                $img->save(base_path('public/uploads/paymentGetway/'.$name));
                $image = 'uploads/paymentGetway/'.$name;
        }

        Paypal::where('id',1)->update([
            'status' => $request->status,
            'accountMode' => $request->accountMode,
            'countryName' => $request->country,
            'currencyName' => $request->currency,
            'currencyRatePerUSD' => $request->currencyRatePerUSD,
            'paypalClientId' => $request->paypalClientId,
            'paypalClientSecret' => $request->paypalClientSecret,
            'image' => $image,
        ]);

        toast('Paypal payment info update successfully!', 'success')->width('350');
        return back();

    }

    public function stripeUpdate(Request $request){
        $request->validate([
            'status' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $image = $stripe = Stripe::where('id',1)->first()->image;

        if ($image != 'default/paymentGetway/stripe.png') {
            unlink(base_path('public/'.$image));
        }

        if ($request->file('image')) {
                $manager = new ImageManager(new Driver());
                $newImage = $request->file('image');
                $name = 'stripe-payment-getway'.'.'.$newImage->getClientOriginalExtension();
                $img = $manager->read($newImage);
                $img = $img->resize(200,120);
                $img->save(base_path('public/uploads/paymentGetway/'.$name));
                $image = 'uploads/paymentGetway/'.$name;
        }

        Stripe::where('id',1)->update([
            'status' => $request->status,
            'countryName' => $request->country,
            'currencyName' => $request->currency,
            'currencyRatePerUSD' => $request->currencyRatePerUSD,
            'stripeClientId' => $request->stripeClientId,
            'stripeSecretKey' => $request->stripeSecretKey,
            'image' => $image,
        ]);

        toast('Stripe payment info update successfully!', 'success')->width('350');
        return back();
    }

    public function mollieUpdate(Request $request){
        $request->validate([
            'status' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $image = $mollie = Mollie::where('id',1)->first()->image;

        if ($image != 'default/paymentGetway/mollie.png') {
            unlink(base_path('public/'.$image));
        }

        if ($request->file('image')) {
                $manager = new ImageManager(new Driver());
                $newImage = $request->file('image');
                $name = 'mollie-payment-getway'.'.'.$newImage->getClientOriginalExtension();
                $img = $manager->read($newImage);
                $img = $img->resize(200,120);
                $img->save(base_path('public/uploads/paymentGetway/'.$name));
                $image = 'uploads/paymentGetway/'.$name;
        }

        Mollie::where('id',1)->update([
            'status' => $request->status,
            'countryName' => $request->country,
            'currencyName' => $request->currency,
            'currencyRatePerUSD' => $request->currencyRatePerUSD,
            'mollieKey' => $request->mollieKey,
            'image' => $image,
        ]);

        toast('Mollie payment info update successfully!', 'success')->width('350');
        return back();
    }


}
