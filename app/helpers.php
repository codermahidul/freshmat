<?php

use App\Models\App;
use App\Models\Banner;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\FAQS;
use App\Models\HomeVideoGallery;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\SectionTitle;
use App\Models\Setting;
use App\Models\Testimonial;
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

function blogCategoryPostCounter(){
    $blogCategorieswithpostCount = BlogCategory::latest()->get();
    foreach ($blogCategorieswithpostCount as $blogCategory) {
        $blogCategory->postCount = BlogPost::where('status','publish')->where('categoryId',$blogCategory->id)->count();
    }
    return $blogCategorieswithpostCount;
}

//Home One Banner One

function banner($id){
    return Banner::where('id',$id)->get();
}


//Home One Video Gallery

function hovg(){
    return HomeVideoGallery::where('id',1)->first();
}

//Global blogpost

function globalBlog(){
    $blogs = BlogPost::where('status','publish')->with('blogcategory')->with('user')->latest()->take(3)->get();
     foreach ($blogs as $blog) {
         $blog->commentsCount = Comment::where('postId',$blog->id)->where('status','approve')->count();
     }
     return $blogs;
 }


 function partners(){
    return Partner::where('status','active')->latest()->get();
 }

 function appSection(){
    return App::find(1);
 }

 function productSlug($id){
    return Product::find($id)->slug;
 }


 function sectionTitle($id){
    return SectionTitle::find($id);
 }

 function faqs($query){
    $oddOrEven = '';
    if ($query == 'odd') {
        $oddOrEven = 1;
    }else {
        $oddOrEven = 0;
    }

    return FAQS::where('status','active')->whereRaw('id % 2 = ?',[$oddOrEven])->get();
 }


 function testimonial(){
    return Testimonial::where('status','active')->latest()->get();
 }

 function setting($query){
    return Setting::find(1)->$query;
 }

 //unread message count

 function unreadMessage(){
    return Message::where('status','unread')->count();
 }