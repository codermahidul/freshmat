<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\App;
use App\Models\Banner;
use App\Models\Wishlist;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\Deals;
use App\Models\Invoices;
use App\Models\EmailConfiguration;
use App\Models\FAQS;
use App\Models\Footer;
use App\Models\FooterTop;
use App\Models\HomeVideoGallery;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Policy;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\SectionTitle;
use App\Models\Setting;
use App\Models\SocialLinks;
use App\Models\Testimonial;
use App\Models\Topbar;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Session;

if (!function_exists('wishlistTotalItem')) {
    function wishlistTotalItem($userId){
        return \App\Models\Wishlist::where('userId',$userId)->count();
    }
}

function wishlistHave($id){
   if (Auth::user()) {
    $have = Wishlist::where('userId', Auth::user()->id)->where('productId',$id)->count();
    if ($have == 1) {
        return 1;
    }else{
        return 0;
    }
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
    return Banner::where('id',$id)->first();
}


//all page deals

function deals($id){
    return Deals::where('id',$id)->first();
}


//Home One Video Gallery

function hovg(){
    return HomeVideoGallery::where('id',1)->first();
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

 //Email Configuration

 function emailConfig($query){
    if (isset(EmailConfiguration::find(1)->$query)) {
        return EmailConfiguration::find(1)->$query;
    }
 }

 function mailServer(){
    config(['mail.mailers.smtp.host' => emailConfig('mailHost')]);
    config(['mail.mailers.smtp.port' => emailConfig('mailPort')]);
    config(['mail.mailers.smtp.encryption' => emailConfig('mailEncryption')]);
    config(['mail.mailers.smtp.username' => emailConfig('smtpUserName')]);
    config(['mail.mailers.smtp.password' => emailConfig('smtpPassword')]);
    config(['mail.from.address' => emailConfig('email')]);
 }


 function googleLogin(){
    config(['services.google.client_id' => setting('glClientId')]);
    config(['services.google.client_secret' => setting('glSecretKey')]);
    config(['services.google.redirect' => setting('glRedirectUrl')]);
 }

 function facebookLogin(){
    config(['services.facebook.client_id' => setting('fbAppId')]);
    config(['services.facebook.client_secret' => setting('fbSecretKey')]);
    config(['services.facebook.redirect' => setting('fbRedirectUrl')]);
 }

 function googleRecaptcha(){
    config(['services.recaptcha.key' => setting('captchaSiteKey')]);
    config(['services.recaptcha.secret' => setting('captchaSecretKey')]);
 }


 function topbarContent($query){
    return Topbar::find(1)->$query;
 }

 function socialLinks(){
    return SocialLinks::all();
 }


 function counter($query){

    $providedDate = new DateTime(deals($query)->date);
    $currentDate = new DateTime();
    $difference = $currentDate->diff($providedDate);
    $daysDifference = $difference->days;

    return $daysDifference;

 }


 function footerTop($id){
    return FooterTop::where('id',$id)->first();
 }


 function footer(){
    return Footer::find(1)->first();
 }


 function copyright(){
    $appName = '<a href="/">'.env('APP_NAME').'</a>';
    $currentYear = Carbon::now()->year;
    $withYear = Str::replace('{year}',$currentYear,footer()->copyrightText);
    return Str::replace('{mySite}',$appName,$withYear);
 }

 function htPolicy($id){
    return Policy::where('id',$id)->first();
 }

 function lastInvoiceId(){
    $latestInvoice = Invoice::latest('id')->first();
    $newId = $latestInvoice ? $latestInvoice->id + 1 : 1;
    return $newId;
 };

 function lastInvoiceIdByUser(){
    return $latestInvoice = Invoice::where('userId',Auth::user()->id)->latest('id')->first()->id;
 };

 function cartQti($id){
       $cart = Session::get('cart');
       if ($cart) {
        foreach ($cart as $item) {
            if($item['productId'] == $id){
                return $item['quantity'];
            }
        }
       }
       return 1;
 }


 function data($query){
    if ($query == 'newOrder') {
        return Invoice::where('status', 'new')->count();
    }elseif ($query == 'complateOrder') {
        return Invoice::where('status', 'complete')->count();
    }elseif($query == 'orderInProcessing'){
        return Invoice::where('status', 'delevery-in-process')->count();
    }elseif($query == 'orderCancel'){
        return Invoice::where('status', 'cancel')->count();
    }elseif($query == 'orderToday'){
        return Invoice::whereDate('created_at', Carbon::today())->count();
    }elseif($query == 'orderThisWeek'){
        return Invoice::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->count();
    }elseif($query == 'orderThisMonth'){
        return Invoice::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();
    }elseif($query == 'orderThisYear'){
        return Invoice::whereYear('created_at', Carbon::now()->year)
        ->count();
    }
 }


 function commentCounter($id){
    return Comment::where('postId',$id)->count();
 }


 function topFiveCategory(){
    return ProductCategory::latest()->take(5)->get();
 }

 function topFiveBlogCategory(){
    return BlogCategory::latest()->take(5)->get();
 }


 function payTotal(){
    return Invoice::where('userId',Auth::user()->id)->latest()->first()->total;
 }


 function mailData($id, $string){
    $getMail = EmailTemplate::where('id',$id)->first();

    if ($string == 'subject') {
        return $getMail->subject;
    }elseif ($string == 'content') {
        return $getMail->content;
    }
 }
