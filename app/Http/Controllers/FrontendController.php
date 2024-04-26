<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class FrontendController extends Controller
{

    //User Login
    public function login(){
        if (Auth::check()) {
         return redirect(route('index'));
        }
        return view('frontend.pages.auth.login');
    }
    //User Register
    public function register(){
        if (Auth::check()) {
            return redirect(route('index'));
           }
        return view('frontend.pages.auth.register');
    }

    //Shop
    public function shop(){
        $products = Product::where('status','active')->latest()->paginate(9);
        return view('frontend.pages.shop',compact([
            'products',
        ]));
    }

    //Product Details
    public function productDetails($slug){

        $productInfo = Product::where('slug', $slug)->with('productcategories','productgallery')->first();
        $currentProductId = $productInfo->id;

        $categoryId = $productInfo->productcategories->id;

        $relatedProducts = Product::where('categoryId',$categoryId)->where('id','!=',$currentProductId)->latest()->take(10)->get();

        return view('frontend.pages.productDetails',compact([
            'productInfo',
            'relatedProducts',
        ]));
    }

    //Protected Route
    public function dashboard(){
        return view('frontend.pages.dashboard.dashboard');
    } 

    public function order(){
        return view('frontend.pages.dashboard.order');
    }

    public function review(){
        return view('frontend.pages.dashboard.review');
    }

    public function wishlist(){
        $wishlists = Wishlist::where('userId',Auth::id())->with('products','products.productcategories')->latest()->get();
        return view('frontend.pages.dashboard.wishlist',compact([
            'wishlists',
        ]));
    }

    public function addToWishlists($id){
       $wishlistsCheck = Wishlist::where('userId',Auth::id())->where('productId',$id)->get();
       if ($wishlistsCheck->isEmpty()) {
        Wishlist::insert([
            'userId' => Auth::id(),
            'productId' => $id,
        ]);
       } else {
        Wishlist::where('userId',Auth::id())->where('productId',$id)->delete();
       }

       return back();
       
    }

    public function addToCart($id){
       $cartlistCheck = Cart::where('userId',Auth::id())->where('productId',$id)->get();
       $price = Product::where('id',$id)->first()->selePrice;
       if ($cartlistCheck->isEmpty()) {
        Cart::insert([
            'userId' => Auth::id(),
            'productId' => $id,
            'price' => $price,
        ]);
       } else {
        Cart::where('userId',Auth::id())->where('productId',$id)->increment('quantity',1);
       }

       return back();
       
    }

    public function removeCartItem($id){
        Cart::where('id',$id)->delete();
        return back();
    }

    public function cart(){
        $cartItems = Cart::where('userId',Auth::id())->with('product')->get();
        return view('frontend.pages.cart',compact([
            'cartItems',
        ]));
    }

    public function couponClaim(Request $request){
        $request->validate([
            'coupon' => 'required',
        ]);

        $claimCupon = $request->coupon;
        $coupon = Coupon::where('name',$claimCupon)->where('status','active')->first();

        if (empty($coupon)) {
            return back()->with('nofound', 'Your claimed coupon not found!');
        } else {
            $coupon->expireDate;
            $date = date('Y-m-d');
            if ($date <= $coupon->expireDate) {
                if (cartTotalPrice(Auth::id()) <= $coupon->minOrder) {
                    return back()->with('nofound', 'Your claimed coupon minimum order ammount $'.$coupon->minOrder.'!');
                }else {
                    if (!empty($coupon->maxOrder)) {
                        if (cartTotalPrice(Auth::id()) <= $coupon->maxOrder) {
                            if ($coupon->limit <= 0) {
                                return back()->with('nofound', 'Your claimed coupon has no limit!');
                            }else {
                                $totalAmountOfOrder = cartTotalPrice(Auth::id());
                                $discountType =$coupon->type;
                                $discountAmmount = 0;
                                if ($discountType == 'flat') {
                                    $discountAmmount = $totalAmountOfOrder / 100 * $coupon->discount;
                                    return back()->with([
                                        'success' => 'Your coupon has been successfully redeemed.',
                                        'discountAmmount'=> $discountAmmount,
                                        'couponName'=> $coupon->name,
                                    ]);
                                } else{
                                    $discountAmmount = $totalAmountOfOrder - $coupon->discount;
                                    return back()->with([
                                        'success' => 'Your coupon has been successfully redeemed.',
                                        'discountAmmount'=> $discountAmmount,
                                        'couponName'=> $coupon->name,
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
                            $totalAmountOfOrder = cartTotalPrice(Auth::id());
                            $discountType =$coupon->type;
                            $discountAmmount = '';
                            if ($discountType == 'flat') {
                                $discountAmmount = ($totalAmountOfOrder / 100) * $coupon->discount;
                                return back()->with([
                                    'success' => 'Your coupon has been successfully redeemed.',
                                    'discountAmmount'=> $discountAmmount,
                                    'couponName'=> $coupon->name,
                                ]);
                            } else{
                                $discountAmmount = $coupon->discount;
                                return back()->with([
                                    'success' => 'Your coupon has been successfully redeemed.',
                                    'discountAmmount'=> $discountAmmount,
                                    'couponName'=> $coupon->name,
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

    public function checkout(?string $coupon = null){
        if (!$coupon== null) {
            $coupon = Coupon::where('name',$coupon)->first();
            if ($coupon->type == 'flat') {
                $discount = (cartTotalPrice(Auth::id()) / 100)*$coupon->discount;
            }else {
                $discount = cartTotalPrice(Auth::id()) - $coupon->discount;
            }
        }

        return view('frontend.pages.checkout',compact([
            'discount',
        ]));
    }

    public function passwordChange(){
        return view('frontend.pages.dashboard.passwordChange');
    }

    public function index(){
        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $topCategories = ProductCategory::latest()->take(4)->get();
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->get();

        return view('welcome',compact([
            'productCategories',
            'topCategories',
            'latestProduct',
        ]));
    }




}
