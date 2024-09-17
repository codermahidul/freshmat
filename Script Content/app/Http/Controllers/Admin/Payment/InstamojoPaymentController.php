<?php

namespace App\Http\Controllers\Admin\Payment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstamojoPaymentController extends Controller
{
    public function payment(Request $request){

        $api_key = config('instamojo.api_key');
        $auth_token= config('instamojo.auth_token');
        $url = config('instamojo.end_point').'payment-requests/';


        $response = Http::withHeaders([
            "X-Api-Key" => $api_key,
            "X-Auth-Token" => $auth_token,
        ])->post($url, [
            'purpose' => 'Online Payment',
            'amount' => 100,
            'phone' => '9916231477',
            'buyer_name' => 'Test User',
            'redirect_url' => route('instamojo.callback'),
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => 'test@gmail.com',
            'allow_repeated_payments' => false,
        ]);

        $response_body = json_decode($response);

        dd($response_body);


    }

    public function callback(){

    }


}
