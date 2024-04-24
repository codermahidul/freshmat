<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('frontend.pages.shop');
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
        return view('frontend.pages.dashboard.wishlist');
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
