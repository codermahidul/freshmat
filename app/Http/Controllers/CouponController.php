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

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'discount' => 'required|numeric|gt:0',
            'type' => 'required',
            'minOrder' => 'nullable|numeric|gt:0',
            'maxOrder' => 'nullable|numeric|gt:0|gt:minOrder',
            'limit' => 'required|numeric|gt:0',
            'expireDate' => 'required|date|after:today',
            'status' => 'required',
        ]);

        Coupon::insert([
            'name' => $request->input('name'),
            'discount' => $request->input('discount'),
            'type' => $request->input('type'),
            'minOrder' => $request->input('minOrder'),
            'maxOrder' => $request->input('maxOrder'),
            'limit' => $request->input('limit'),
            'expireDate' => $request->input('expireDate'),
            'status' => $request->input('status'),
        ]);

        return back()->with('success','Copun Added Successfully!');

    }

    public function edit($id){
        $coupon = Coupon::where('id',$id)->first();
        return view('dashboard.product.coupon.edit',compact('coupon'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'discount' => 'required|numeric|gt:0',
            'type' => 'required',
            'minOrder' => 'nullable|numeric|gt:0',
            'maxOrder' => 'nullable|numeric|gt:0|gt:minOrder',
            'limit' => 'required|numeric|gt:0',
            'expireDate' => 'required|date|after:today',
            'status' => 'required',
        ]);


        Coupon::where('id',$id)->update([
            'name' => $request->input('name'),
            'discount' => $request->input('discount'),
            'type' => $request->input('type'),
            'minOrder' => $request->input('minOrder'),
            'maxOrder' => $request->input('maxOrder'),
            'limit' => $request->input('limit'),
            'expireDate' => $request->input('expireDate'),
            'status' => $request->input('status'),
        ]);
        
        return back()->with('success','Coupon Update Successfully!');
    }


}
