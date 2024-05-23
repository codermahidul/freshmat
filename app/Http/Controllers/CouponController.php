<?php

namespace App\Http\Controllers;
use Faker\Generator as Faker;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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


    //Frontedn coupon claimed
    public function couponClaim(Request $request){
        $request->validate([
            'coupon' => 'required',
        ]);

        $totalordersum = 0;

        if (Session::has('cart')) {
            foreach (Session::get('cart') as $cart) {
                $totalordersum += $cart['price']*$cart['quantity'];
            }
        }

        $claimCupon = $request->coupon;
        $coupon = Coupon::where('name',$claimCupon)->where('status','active')->first();

        if (empty($coupon)) {
            return back()->with('nofound', 'Your claimed coupon not found!');
        } else {
            $coupon->expireDate;
            $date = date('Y-m-d');
            if ($date <= $coupon->expireDate) {
                if ($totalordersum <= $coupon->minOrder) {
                    return back()->with('nofound', 'Your claimed coupon minimum order ammount $'.$coupon->minOrder.'!');
                }else {
                    if (!empty($coupon->maxOrder)) {
                        if ($totalordersum <= $coupon->maxOrder) {
                            if ($coupon->limit <= 0) {
                                return back()->with('nofound', 'Your claimed coupon has no limit!');
                            }else {
                                $totalAmountOfOrder = $totalordersum;
                                $discountType =$coupon->type;
                                $discountAmmount = 0;
                                if ($discountType == 'flat') {
                                    $discountAmmount = $totalAmountOfOrder / 100 * $coupon->discount;
                                    $redemCoupon = [
                                        'couponName' => $coupon->name,
                                        'discountAmmount' => $discountAmmount,
                                    ];
                                     Session::put('coupon',$redemCoupon);
                                    return back()->with([
                                        'success' => 'Your coupon has been successfully redeemed.'
                                    ]);
                                } else{
                                    $discountAmmount = $totalAmountOfOrder - $coupon->discount;
                                    $redemCoupon = [
                                        'couponName' => $coupon->name,
                                        'discountAmmount' => $discountAmmount,
                                    ];
                                    Session::put('coupon',$redemCoupon);
                                    return back()->with([
                                        'success' => 'Your coupon has been successfully redeemed.'
                                    ]);
                                }
                            }
                        } else {
                            return back()->with('nofound', 'Your claimed coupon maximum order ammount $'.$coupon->maxOrder.'!');
                        }
                        
                    } else {
                        if ($coupon->limit <= 0) {
                            return back()->with('nofound', 'Your claimed coupon has no limit!');
                        }else {
                            $totalAmountOfOrder = $totalordersum;
                            $discountType =$coupon->type;
                            $discountAmmount = '';
                            if ($discountType == 'flat') {
                                $discountAmmount = ($totalAmountOfOrder / 100) * $coupon->discount;
                                $redemCoupon = [
                                    'couponName' => $coupon->name,
                                    'discountAmmount' => $discountAmmount,
                                ];
                                 Session::put('coupon',$redemCoupon);
                                return back()->with([
                                    'success' => 'Your coupon has been successfully redeemed.',
                                ]);
                            } else{
                                $discountAmmount = $coupon->discount;
                                $redemCoupon = [
                                    'couponName' => $coupon->name,
                                    'discountAmmount' => $discountAmmount,
                                ];
                                Session::put('coupon',$redemCoupon);
                                return back()->with([
                                    'success' => 'Your coupon has been successfully redeemed.',
                                ]);
                            }
                        }
                    }
                    
                }
            } else {
                return back()->with('nofound', 'Your claimed coupon vlidity expired!');
            }
        
        }
        
    
    }


    //dfsdfsd
    protected $faker;

    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }



    public function checkroute(){
        
        return setting('footerLogo');
        return setting('logo');
        return setting('topbar');

    }


}
