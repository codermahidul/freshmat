<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoicesProducts;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Slider;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
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
        $activeOrder = Invoice::where('userId',Auth::id())->where('status','active')->count();
        $completedOrder = Invoice::where('userId',Auth::id())->where('status','completed')->count();
        $totalOrder = Invoice::where('userId',Auth::id())->count();
        return view('frontend.pages.dashboard.dashboard',compact(
            'activeOrder',
            'completedOrder',
            'totalOrder',
        ));
    } 

    public function editProfile(){
        return view('frontend.pages.dashboard.editProfile');
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::where('id',Auth::id())->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        UserProfile::where('userId',Auth::id())->update([
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
        ]);

        return back()->with('success', 'Your Profile Update Successfully');
    }

    public function order(){
        $orders = Invoice::where('userId',Auth::id())->latest()->get();
        return view('frontend.pages.dashboard.order',compact(
            'orders',
        ));
    }

    public function orderInvoice($id){
        $invoice = Invoice::where('id',$id)->first();
        $products = InvoicesProducts::where('invoiceId',$id)->get();
        foreach ($products as $product) {
            $product->name = Product::where('id',$product->productId)->first()->title;
            $product->price = Product::where('id',$product->productId)->first()->selePrice;
        }
        return view('frontend.pages.dashboard.invoice',compact('invoice','products'));
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


    public function passwordChange(){
        return view('frontend.pages.dashboard.passwordChange');
    }

    public function index(){
        $productCategories = ProductCategory::where('status','active')->latest()->get();
        $topCategories = ProductCategory::where('status','active')->latest()->take(4)->get();
        $latestProduct = Product::where('status','active')->with('productcategories','productgallery')->latest()->get();
        $sliders = Slider::where('status','active')->latest()->get();
        
        // $categories = ProductCategory::where('status','active')->latest()->get();

        return view('welcome',compact([
            'productCategories',
            'topCategories',
            'latestProduct',
            'sliders',
        ]));
    }


    public function contact(){
        return view('frontend.pages.contact');
    }

    public function aboutUs(){
        return view('frontend.pages.aboutus');
    }

    public function faqsf(){
        return view('frontend.pages.faqs');
    }

    //Forgot Password
    public function forgotPassword(){
        return view('frontend.pages.auth.forgot');
    }




}
