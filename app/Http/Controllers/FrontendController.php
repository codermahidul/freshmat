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

    public function categoryWiseProduct($slug){
        $categoryId = ProductCategory::where('slug',$slug)->first()->id;
        $categoryName = ProductCategory::where('slug',$slug)->first()->name;
        $categoryWiseProducts = Product::where('status','active')->where('categoryId',$categoryId)->latest()->paginate(10);
        return view('frontend.pages.categorywiseproduct',compact([
            'categoryWiseProducts',
            'categoryName'
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


    public function removeCartItem($id){
        Cart::where('id',$id)->delete();
        return back();
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
