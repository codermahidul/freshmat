<?php

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;

if (!function_exists('wishlistTotalItem')) {
    function wishlistTotalItem($userId){
        return \App\Models\Wishlist::where('userId',$userId)->count();
    }
}


//Cart total item
function cartTotal(){
    if (Session::has('cart')) {
        return count(Session::get('cart'));
    }else{
        return 0;
    }
}

function subTotal(){
    if (Session::has('cart')) {
        $subtotal = 0;
        foreach (Session::get('cart') as $cart) {        
            $subtotal += $cart['price']*$cart['quantity'];
        }
        return $subtotal;
    }else{
        return 0;
    }
}

function discount(){
    if (Session::has('coupon')) {
        return Session::get('coupon')['discountAmmount'];
    }else{
        return 0;
    }
}


function productCategories(){
    return ProductCategory::where('status','active')->latest()->get();
}


function productCategoryProductCounter(){
    $categories = ProductCategory::where('status','active')->latest()->get();
        foreach ($categories as $category) {
            $category->productCount = Product::where('categoryId', $category->id)
            ->where('status', 'active')
            ->count();
        };
        return $categories;
}