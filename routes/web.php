<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FAQSController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DeliveryLocationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeVideoGalleryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//User Routes
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/login', [FrontendController::class, 'login'])->name('userLogin');
Route::get('/register', [FrontendController::class, 'register'])->name('userRegister');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/shop/category/{slug}', [FrontendController::class, 'categoryWiseProduct'])->name('categoryWiseProduct');
Route::get('/shop/product/{slug}', [FrontendController::class, 'productDetails'])->name('productDetails');
//Cart
Route::post('/product/cart/add/',[CartController::class, 'addToCart'])->name('addToCart');
Route::get('/product/cart/',[CartController::class, 'cart'])->name('cart');
//Blog
Route::get('blog',[BlogController::class, 'showblogpost'])->name('frontendblog');
Route::get('blog/{slug}',[BlogController::class, 'blogDetails'])->name('blogDetails');
Route::get('blog/category/{slug}',[BlogController::class, 'categoryWiseBlog'])->name('categoryWiseBlog');
//Coupon
Route::post('/product/coupon/claim',[CouponController::class, 'couponClaim'])->name('couponClaim');
Route::get('/checkroute',[CouponController::class, 'checkroute'])->name('checkroute');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('userDashboard');
    Route::get('/edit/profile', [FrontendController::class, 'editProfile'])->name('editProfile');
    Route::post('/edit/profile/update', [FrontendController::class, 'profileUpdate'])->name('profileUpdate');
    Route::get('/dashboard/order', [FrontendController::class, 'order'])->name('userOrder');
    Route::get('/dashboard/order/invoice/{id}', [FrontendController::class, 'orderInvoice'])->name('orderInvoice');
    Route::get('/dashboard/review', [FrontendController::class, 'review'])->name('userReview');
    Route::get('/dashboard/wishlist', [FrontendController::class, 'wishlist'])->name('userWishlist');
    Route::get('/dashboard/password-change', [FrontendController::class, 'passwordChange'])->name('userPasswordChange');
    //Wishlists
    Route::get('/product/wishlist/add/{id}',[FrontendController::class, 'addToWishlists'])->name('adToWishlist');
    //Cart
    Route::get('/product/cart/remove/{id}',[FrontendController::class, 'removeCartItem'])->name('removeCartItem');
    //Checkout
    Route::get('/product/cart/checkout/',[CheckoutController::class, 'checkout'])->name('checkout');
    //Payment
    Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
    //Comment
    Route::post('blog/comment/{slug}', [BlogController::class, 'insertComment'])->name('insertComment');
    

});

//Admin Routes
Route::prefix('admin')->group(function(){
Auth::routes();
    //Admin Routes
Route::group(['middleware' => ['auth','role']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //FAQ
    Route::get('/faqs', [FAQSController::class, 'index'])->name('faqs');
    Route::get('/faqs/status/{id}', [FAQSController::class, 'status'])->name('status');
    Route::get('/faqs/add', [FAQSController::class, 'faqaAdd'])->name('faqs.add');
    Route::post('/faqs/insert', [FAQSController::class, 'faqsInsert'])->name('faqs.insert');
    Route::get('/faqs/delete/{id}', [FAQSController::class, 'faqsDelete'])->name('faqs.delete');
    Route::get('/faqs/edit/{id}', [FAQSController::class, 'faqsEdit'])->name('faqs.edit');
    Route::post('/faqs/update/{id}',[FAQSController::class, 'faqsUpdate'])->name('faqs.update');
    //Blog Post
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/add', [BlogController::class, 'blogAdd'])->name('blog.add');
    Route::post('/blog/insert', [BlogController::class, 'blogInsert'])->name('blog.insert');
    Route::get('/blog/delete/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete');
    Route::get('/blog/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
    //Blog Category
    Route::get('/blog/category', [BlogController::class, 'category'])->name('category');
    Route::get('/blog/category/add', [BlogController::class, 'categoryAdd'])->name('category.add');
    Route::post('/blog/category/insert', [BlogController::class, 'categoryInsert'])->name('category.insert');
    Route::get('/blog/category/delete/{id}', [BlogController::class, 'categoryDelete'])->name('category.delete');
    Route::get('/blog/category/edit/{id}', [BlogController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/blog/category/update/{id}', [BlogController::class, 'categoryUpdate'])->name('category.update');
    //Comments
    Route::get('/blog/comments', [BlogController::class, 'commentIndex'])->name('comments');
    Route::get('/blog/comment/status/{id}',[BlogController::class, 'commentStatus'])->name('blog.comment.status');
    Route::get('/blog/comment/delete/{id}',[BlogController::class, 'commentDelete'])->name('blog.comment.delete');
    Route::get('/blog/comment/reply/{id}',[BlogController::class, 'commentReply'])->name('blog.comment.reply');
    Route::post('/blog/comment/reply/{id}',[BlogController::class, 'commentReplyInsert'])->name('blog.comment.reply');
    //Product Category
    Route::get('/product/category', [ProductController::class, 'index'])->name('productCategory');
    Route::get('/product/category/add', [ProductController::class, 'add'])->name('productCategoryAdd');
    Route::post('/product/category/store', [ProductController::class, 'store'])->name('productCategoryStore');
    Route::get('/product/category/edit/{id}', [ProductController::class, 'edit'])->name('productcategoryedit');
    Route::post('/product/category/update/{id}', [ProductController::class, 'update'])->name('productcategoryupdate');
    Route::get('/product/category/delete/{id}', [ProductController::class, 'delete'])->name('productcategorydelete');
    //Products
    Route::get('product/', [ProductController::class, 'productindex'])->name('products');
    Route::get('product/add', [ProductController::class, 'productadd'])->name('productadd');
    Route::post('product/insert', [ProductController::class, 'productinsert'])->name('productinsert');
    Route::get('product/edit/{id}', [ProductController::class, 'productedit'])->name('productedit');
    Route::post('product/update/{id}', [ProductController::class, 'productupdate'])->name('productupdate');
    Route::get('product/delete/{id}', [ProductController::class, 'productdelete'])->name('productdelete');

    //Coupon
    Route::get('coupon/', [CouponController::class, 'index'])->name('coupon');
    Route::get('coupon/add', [CouponController::class, 'show'])->name('couponadd');
    Route::post('coupon/insert', [CouponController::class, 'insert'])->name('couponinsert');
    Route::get('coupon/edit/{id}', [CouponController::class, 'edit'])->name('couponedit');
    Route::post('coupon/update/{id}', [CouponController::class, 'update'])->name('couponupdate');

    //Delivery Location
    Route::get('delivery/location/', [DeliveryLocationController::class, 'index'])->name('delivery.location');
    Route::get('delivery/location/add', [DeliveryLocationController::class, 'show'])->name('delivery.add');
    Route::post('delivery/location/insert', [DeliveryLocationController::class, 'insert'])->name('delivery.insert');
    Route::get('delivery/location/edit/{id}', [DeliveryLocationController::class, 'edit'])->name('delivery.edit');
    Route::post('delivery/location/update/{id}', [DeliveryLocationController::class, 'update'])->name('delivery.update');
    Route::get('delivery/location/delete/{id}', [DeliveryLocationController::class, 'delete'])->name('delivery.delete');

    //Add Banner
    Route::get('add/banner/', [BannerController::class, 'homeOneBanner'])->name('homeonebanner');
    Route::post('home/one/banner/update', [BannerController::class, 'homeOneBannerUpdate'])->name('hobnupdate');
    Route::post('home/one/banner-two/update', [BannerController::class, 'homeOneBannerTwoUpdate'])->name('hobtupdate');
    Route::post('home/one/banner-special/update', [BannerController::class, 'homeOneBannerSpecialUpdate'])->name('hobspecialupdate');

    //Slider
    Route::get('slider', [SliderController::class, 'index'])->name('slider');
    Route::post('slider/insert', [SliderController::class, 'insert'])->name('sliderInsert');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    //Setting
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::post('setting/logo-favicon/update', [SettingController::class, 'logoFavicon'])->name('logoFavicon');
    
    //Home One Video Gallery
    Route::get('video/gallery', [HomeVideoGalleryController::class, 'index'])->name('homeOneVideoGallery');
    Route::post('hovgUpdate', [HomeVideoGalleryController::class, 'hovgUpdate'])->name('hovgUpdate');

    //Partners
    Route::get('partner', [PartnerController::class, 'index'])->name('partner');
    Route::post('partner/insert', [PartnerController::class, 'insert'])->name('partnerInsert');

});




});