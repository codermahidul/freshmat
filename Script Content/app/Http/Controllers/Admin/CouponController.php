<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
        toast(trans('Copun Added Successfully!'),'success')->width('350');
        return redirect()->route('coupon');

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
        toast(trans('Coupon Update Successfully!'),'success')->width('350');
        return redirect()->route('coupon');
    }


    public function delete($id){
        try {
            $coupon = Coupon::findOrFail($id);
            $coupon->delete();
            return response()->json(['status' => 'success','message' => trans('Cupon delete successfull.')]);
            } catch (\Throwable $th) {
            return response()->json(['status' => 'error','message' => trans('Something went wrong!')]);
        }
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
            toast(trans('Your claimed coupon not found!'),'error')->width('350');
            return back();
        } else {
            $coupon->expireDate;
            $date = date('Y-m-d');
            if ($date <= $coupon->expireDate) {
                if ($totalordersum <= $coupon->minOrder) {
                    toast(trans('Your claimed coupon minimum order ammount $'.$coupon->minOrder.'!'),'error')->width('400');
                    return back();
                }else {
                    if (!empty($coupon->maxOrder)) {
                        if ($totalordersum <= $coupon->maxOrder) {
                            if ($coupon->limit <= 0) {
                                toast(trans('Your claimed coupon has no limit!'),'error')->width('350');
                                return back();
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
                                     toast(trans('Your coupon has been successfully redeemed.'),'success')->width('350');
                                    return back();
                                } else{
                                    $discountAmmount =  $coupon->discount;
                                    $redemCoupon = [
                                        'couponName' => $coupon->name,
                                        'discountAmmount' => $discountAmmount,
                                    ];
                                    Session::put('coupon',$redemCoupon);
                                    toast(trans('Your coupon has been successfully redeemed.'),'success')->width('350');
                                    return back();
                                }
                            }
                        } else {
                            toast(trans('Your claimed coupon maximum order ammount $'.$coupon->maxOrder.'!'),'error')->width('400');
                            return back();
                        }

                    } else {
                        if ($coupon->limit <= 0) {
                            toast(trans('Your claimed coupon has no limit!'),'error')->width('350');
                            return back();
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
                                 toast(trans('Your coupon has been successfully redeemed.'),'success')->width('350');
                                return back();
                            } else{
                                $discountAmmount = $coupon->discount;
                                $redemCoupon = [
                                    'couponName' => $coupon->name,
                                    'discountAmmount' => $discountAmmount,
                                ];
                                Session::put('coupon',$redemCoupon);
                                toast(trans('Your coupon has been successfully redeemed.'),'success')->width('350');
                                return back();
                            }
                        }
                    }

                }
            } else {
                toast(trans('Your claimed coupon validity expired!'),'error')->width('350');
                return back();
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

        return setting('glrecaptchaStatus');

    }


}
