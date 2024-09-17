<?php

namespace App\Http\Controllers\Admin\Payment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RazorpayPayemntController extends Controller
{
    public function payment(){
        return 'razorpay';
    }
}
