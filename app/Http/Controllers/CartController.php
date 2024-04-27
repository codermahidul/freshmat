<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request){

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
    $cartItems[$existingItemIndex]['quantity'] += $quantity;
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
return 'success';
        // $cartlistCheck = Cart::where('userId',Auth::id())->where('productId',$id)->get();
        // $price = Product::where('id',$id)->first()->selePrice;
        // if ($cartlistCheck->isEmpty()) {
        //  Cart::insert([
        //      'userId' => Auth::id(),
        //      'productId' => $id,
        //      'price' => $price,
        //  ]);
        // } else {
        //  Cart::where('userId',Auth::id())->where('productId',$id)->increment('quantity',1);
        // }
 
        // return back();
        
     }


     public function cart(){
        //$cartItems = Session::get('cart');
        return view('frontend.pages.cart');
    }




}
