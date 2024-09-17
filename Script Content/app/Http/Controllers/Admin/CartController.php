<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request){

        Session::forget('coupon');

        $cartItems = Session::get('cart', []);

        $productId = $request->input('productId');
        $quantity = $request->input('quantity');
        $price = Product::where('id', $productId)->first()->selePrice;
        $title = Product::where('id', $productId)->first()->title;
        $thumbnail = Product::where('id', $productId)->first()->thumbnail;
        $regularPrice = Product::where('id', $productId)->first()->regularPrice;

        // Check if the product is already in the cart
        $existingItemIndex = -1;
        foreach ($cartItems as $index => $item) {
            if ($item['productId'] == $productId) {
                $existingItemIndex = $index;
                break;
            }
}

// If the product is already in the cart, update its quantity
if ($existingItemIndex !== -1) {
    if (cartQti($productId) == $quantity) {
         $cartItems[$existingItemIndex]['quantity'] += 1;

    }else{
        $cartItems[$existingItemIndex]['quantity'] = $request->input('quantity');
    }
} else {
    // Otherwise, add a new item to the cart
    $cartItems[] = [
        'productId' => $productId,
        'title' => $title,
        'quantity' => $quantity,
        'price' => $price,
        'thumbnail' => $thumbnail,
        'regularPrice' => $regularPrice,
    ];
}

        Session::put('cart', $cartItems);
        toast(trans('Item added to cart!'),'success')->width('350');
        return back();

}


     public function cart(){
        return view('frontend.pages.cart');
    }


    public function removeCartItem($id){
        $sessionArray = Session::get('cart');

        $filteredArray = array_filter($sessionArray, function ($item) use ($id) {
            return $item['productId'] !== $id;
        });

        if (empty($filteredArray)) {
            Session::forget('cart');
        }else{
            Session::put('cart', $filteredArray);
        }

        toast(trans('Item Removed!'),'success')->width('350');
        return back();
    }



}
