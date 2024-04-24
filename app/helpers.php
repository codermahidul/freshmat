<?php

if (!function_exists('wishlistTotalItem')) {
    function wishlistTotalItem($userId){
        return \App\Models\Wishlist::where('userId',$userId)->count();
    }
}

if (!function_exists('cartTotal')) {
    function cartTotal($userId){
        return \App\Models\Cart::where('userId',$userId)->count();
    }
}

if(!function_exists('cartProducts')){
    function cartProducts($userId){
        return \App\Models\Cart::where('userId',$userId)->with('product')->latest()->get();
    }
}


if(!function_exists('cartTotalPrice')){
    function cartTotalPrice($userId){
        $cartItems = \App\Models\Cart::where('userId',$userId)->get();
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $itemTotlaPrice = $cartItem->quantity * $cartItem->price;
            $totalPrice += $itemTotlaPrice;
        }
        return $totalPrice;
    }
}
