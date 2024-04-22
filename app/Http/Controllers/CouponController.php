<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $coupons = Coupon::latest()->paginate(10);
        return view('dashboard.product.coupon.index',compact('coupons'));
    }

    public function show(){
        return view('dashboard.product.coupon.add');
    }
}
