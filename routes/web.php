<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FAQSController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\DeliveryLocationController;
use App\Http\Controllers\EmailConfigurationController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterTopController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeVideoGalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionTitleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialLinksController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ThemeOptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//User Routes
Auth::routes();
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/home-one', [FrontendController::class, 'indexOne'])->name('indexOne');
Route::get('/home-two', [FrontendController::class, 'indexTwo'])->name('indexTwo');
Route::get('/home-three', [FrontendController::class, 'indexThree'])->name('indexThree');
//Route::get('forgot/password', [FrontendController::class, 'forgotPassword'])->name('forgotPassword');
//Route::get('/login', [FrontendController::class, 'login'])->name('userLogin');
//Route::get('/register', [FrontendController::class, 'register'])->name('userRegister');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/shop/category/{slug}', [FrontendController::class, 'categoryWiseProduct'])->name('categoryWiseProduct');
Route::get('/shop/product/{slug}', [FrontendController::class, 'productDetails'])->name('productDetails');
//pages
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/faqsf', [FrontendController::class, 'faqsf'])->name('faqsf');
//Cart
Route::post('/product/cart/add/',[CartController::class, 'addToCart'])->name('addToCart');
Route::get('/product/cart/',[CartController::class, 'cart'])->name('cart');
Route::get('/product/cart/remove/{id}',[CartController::class, 'removeCartItem'])->name('removeCartItem');
//Blog
Route::get('/blog',[BlogController::class, 'showblogpost'])->name('frontendblog');
Route::get('/blog/{slug}',[BlogController::class, 'blogDetails'])->name('blogDetails');
Route::get('/blog/category/{slug}',[BlogController::class, 'categoryWiseBlog'])->name('categoryWiseBlog');
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
    Route::post('/dashboard/password-update', [FrontendController::class, 'passwordUpdate'])->name('userPasswordUpdate');
    //Wishlists
    Route::get('/product/wishlist/add/{id}',[FrontendController::class, 'addToWishlists'])->name('adToWishlist');
    //Cart
    //Checkout
    Route::get('/product/cart/checkout/',[CheckoutController::class, 'checkout'])->name('checkout');
    //Payment
    Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
    //Comment
    Route::post('/blog/comment/{slug}', [BlogController::class, 'insertComment'])->name('insertComment');
    

});

//Admin Routes
Route::prefix('admin')->group(function(){
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
    Route::get('/product', [ProductController::class, 'productindex'])->name('products');
    Route::get('/product/add', [ProductController::class, 'productadd'])->name('productadd');
    Route::post('/product/insert', [ProductController::class, 'productinsert'])->name('productinsert');
    Route::get('/product/edit/{id}', [ProductController::class, 'productedit'])->name('productedit');
    Route::post('/product/update/{id}', [ProductController::class, 'productupdate'])->name('productupdate');
    Route::get('/product/delete/{id}', [ProductController::class, 'productdelete'])->name('productdelete');

    //Coupon
    Route::get('/coupon', [CouponController::class, 'index'])->name('coupon');
    Route::get('/coupon/add', [CouponController::class, 'show'])->name('couponadd');
    Route::post('/coupon/insert', [CouponController::class, 'insert'])->name('couponinsert');
    Route::get('/coupon/edit/{id}', [CouponController::class, 'edit'])->name('couponedit');
    Route::post('/coupon/update/{id}', [CouponController::class, 'update'])->name('couponupdate');

    //Delivery Location
    Route::get('/delivery/location', [DeliveryLocationController::class, 'index'])->name('delivery.location');
    Route::get('/delivery/location/add', [DeliveryLocationController::class, 'show'])->name('delivery.add');
    Route::post('/delivery/location/insert', [DeliveryLocationController::class, 'insert'])->name('delivery.insert');
    Route::get('/delivery/location/edit/{id}', [DeliveryLocationController::class, 'edit'])->name('delivery.edit');
    Route::post('/delivery/location/update/{id}', [DeliveryLocationController::class, 'update'])->name('delivery.update');
    Route::get('/delivery/location/delete/{id}', [DeliveryLocationController::class, 'delete'])->name('delivery.delete');

    //Home One Banner
    Route::get('/add/banner', [BannerController::class, 'homeOneBanner'])->name('homeonebanner');
    Route::post('/home/one/banner/update', [BannerController::class, 'homeOneBannerUpdate'])->name('hobnupdate');
    Route::post('/home/one/banner-two/update', [BannerController::class, 'homeOneBannerTwoUpdate'])->name('hobtupdate');
    Route::post('/home/one/banner-special/update', [BannerController::class, 'homeOneBannerSpecialUpdate'])->name('hobspecialupdate');

    //Home Two Banner
    Route::get('/add/banner/two', [BannerController::class, 'homeTwoBanner'])->name('hometwobanner');
    Route::post('/update/banner/two', [BannerController::class, 'htboUpdate'])->name('htboUpdate');
    Route::post('/update/banner/three', [BannerController::class, 'htbtUpdate'])->name('htbtUpdate');
    Route::post('/update/banner/four', [BannerController::class, 'htbthUpdate'])->name('htbthUpdate');
    Route::post('/update/banner/special', [BannerController::class, 'htbsUpdate'])->name('htbsUpdate');
    Route::post('/update/banner/barnd/special', [BannerController::class, 'htbbsUpdate'])->name('htbbsUpdate');
    Route::post('/update/banner/main', [BannerController::class, 'htbmainUpdate'])->name('htbmainUpdate');
    Route::get('/add/banner/three', [BannerController::class, 'homeThreeBanner'])->name('homeThreeBanner');
    Route::post('/update/banner-one/home-three', [BannerController::class, 'hthboupdate'])->name('hthboupdate');
    Route::post('/update/banner-two/home-three', [BannerController::class, 'hthbtupdate'])->name('hthbtupdate');

    //Product Details Page
    Route::get('/product-details/banner',[BannerController::class, 'pdpagebannerIndex'])->name('pdpagebannerIndex');
    Route::post('/product-details-banner/update', [BannerController::class, 'productDetailsBanner'])->name('pdpbupdate');

    //Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::post('/slider/insert', [SliderController::class, 'insert'])->name('sliderInsert');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    //Testimonial
    Route::get('/testimonial',[TestimonialController::class, 'index'])->name('testimonial');
    Route::post('/testimonial/insert',[TestimonialController::class, 'insert'])->name('testimonial.insert');
    Route::get('/testimonial/edit/{id}',[TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}',[TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}',[TestimonialController::class, 'delete'])->name('testimonial.delete');

    //Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting/logo-favicon/update', [SettingController::class, 'logoFavicon'])->name('logoFavicon');
    Route::post('/setting/general/update', [SettingController::class, 'general'])->name('general');
    Route::post('/setting/google/analytic/update', [SettingController::class, 'googleAnalytic'])->name('googleAnalytic');
    Route::post('/setting/google/recaptcha/update', [SettingController::class, 'googleRecaptcha'])->name('googleRecaptcha');
    Route::post('/setting/social/login/update', [SettingController::class, 'socialLogin'])->name('socialLogin');
    Route::post('/setting/facebook/pixel/update', [SettingController::class, 'facebookPixel'])->name('facebookPixel');
    
    //Home One Video Gallery
    Route::get('/video/gallery', [HomeVideoGalleryController::class, 'index'])->name('homeOneVideoGallery');
    Route::post('/hovgUpdate', [HomeVideoGalleryController::class, 'hovgUpdate'])->name('hovgUpdate');

    //Partners
    Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
    Route::post('/partner/insert', [PartnerController::class, 'insert'])->name('partnerInsert');
    Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::post('/slider/update/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::get('/partner/delete/{id}', [PartnerController::class, 'delete'])->name('partner.delete');

    //App Links
    Route::get('/app',[AppController::class, 'index'])->name('appLinks');
    Route::post('/app/update',[AppController::class, 'update'])->name('appLinksUpdate');

    //Section Title
    Route::get('/section/title',[SectionTitleController::class,'index'] )->name('sectionTitle');
    Route::post('/section/title/update/{id}',[SectionTitleController::class,'update'] )->name('sectionTitleUpdate');

    //Page Content
    Route::get('/about-us',[PagesController::class, 'aboutUs'])->name('aboutUsPage');
    Route::post('/about-us/update',[PagesController::class, 'aboutUsUpdate'])->name('aboutUsUpdate');
    Route::get('/contact-us',[PagesController::class, 'contactUsPage'])->name('contactUsPage');
    Route::post('/contact-us/update',[PagesController::class, 'contactUsUpdate'])->name('contactUsUpdate');

    //Message
    Route::get('/message', [MessageController::class, 'index'])->name('inbox');
    Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('sendMessage');
    Route::get('/message/delete/{id}', [MessageController::class, 'messageDelete'])->name('messageDelete');
    Route::get('/message/view/{id}', [MessageController::class, 'messageView'])->name('messageView');
    Route::post('/contact/message/setting/update', [SettingController::class, 'contactMessageSetingUpdate'])->name('contactMessageSetingUpdate');

    //Email Configuration
    Route::get('/email/configuration', [EmailConfigurationController::class, 'index'])->name('emailConfig');
    Route::post('/email/configuration/update', [EmailConfigurationController::class, 'update'])->name('emailConfigUpdate');

    //Theme Option
    Route::get('/theme-option/topbar',[ThemeOptionController::class, 'topbar'])->name('topbar');
    Route::post('/theme-option/topbar/update',[ThemeOptionController::class, 'topbarUpdate'])->name('topbarUpdate');

    //Social Links
    Route::post('/social-links/insert',[SocialLinksController::class, 'insert'])->name('socialLinkInsert');
    Route::get('/social-links/delete/{id}',[SocialLinksController::class, 'delete'])->name('socialLinkDelete');

    //Deals
    Route::get('/home-one/deals',[DealsController::class, 'homeOneDeals'])->name('homeOneDeals');
    Route::post('/home-one/deals/update',[DealsController::class, 'homeOneDealsUpdate'])->name('homeOneDealsUpdate');
    Route::get('/home-two/deals',[DealsController::class, 'homeTwoDeals'])->name('homeTwoDeals');
    Route::post('/home-two/deals/update',[DealsController::class, 'homeTwoDealsUpdate'])->name('homeTwoDealsUpdate');
    Route::get('/home-three/deals',[DealsController::class, 'homeThreeDeals'])->name('homeThreeDeals');
    Route::post('/home-three/deals/update',[DealsController::class, 'homeThreeDealsUpdate'])->name('homeThreeDealsUpdate');

    //Footer Top
    Route::get('/footer-top', [FooterTopController::class, 'index'])->name('footerTop');
    Route::post('/footer-top/update', [FooterTopController::class, 'footerTopUdate'])->name('footerTopUdate');

    //Footer
    Route::get('/footer',[FooterController::class, 'index'])->name('footer');
    Route::post('/footer/update',[FooterController::class, 'footerUpdate'])->name('footerUpdate');



});


});