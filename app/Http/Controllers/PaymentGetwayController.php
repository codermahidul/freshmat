<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentGetwayController extends Controller
{
    public function index(){
        return view('dashboard.paymentGetway.index');
    }
}
