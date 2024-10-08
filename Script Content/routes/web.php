<?php

use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\FAQSController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DealsController;
use App\Http\Controllers\Admin\DeliveryLocationController;
use App\Http\Controllers\Admin\EmailConfigurationController;
use App\Http\Controllers\Admin\FacebookLoginController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\FooterTopController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\GoogleLoginController;
use App\Http\Controllers\Admin\H3VideoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeVideoGalleryController;
use App\Http\Controllers\Admin\InstagramPostController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\Payment\PaymentController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SectionTitleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialLinksController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ThemeOptionController;
use App\Http\Controllers\Admin\AdminloginController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermsConditionController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\Payment\StripePaymentController;
use App\Http\Controllers\Admin\Payment\PaypalPaymentController;
use App\Http\Controllers\Admin\Payment\MolliePaymentController;
use App\Http\Controllers\Admin\Payment\RazorpayPaymentController;
use App\Http\Controllers\Admin\Payment\PaymentGetwayController;
use App\Http\Controllers\Admin\Payment\InstamojoPaymentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//User Routes
Auth::routes(['verify' => true]);
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/home-one', [FrontendController::class, 'indexOne'])->name('indexOne');
Route::get('/home-two', [FrontendController::class, 'indexTwo'])->name('indexTwo');
Route::get('/home-three', [FrontendController::class, 'indexThree'])->name('indexThree');

Route::get('password/reset', [ForgotPasswordController::class, 'showResetForm'])->name('reset.password');
Route::post('password/send-mail', [ForgotPasswordController::class, 'sendMail'])->name('password.sendMail');
Route::get('password/reset/{token}/{email}', [ResetPasswordController::class, 'passwordReset'])->name('userPasswordReset');


//Admin Login Page
Route::get('/admin/login', [AdminloginController::class, 'login'])->name('admin.login');

//Social Login
Route::get('/google/redirect',[GoogleLoginController::class,'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback',[GoogleLoginController::class,'handleGoogleCallback'])->name('google.callback');

Route::get('/facebook/redirect',[FacebookLoginController::class,'redirectToFacebook'])->name('facebook.redirect');
Route::get('/facebook/callback',[FacebookLoginController::class,'handleFacebookCallback'])->name('facebook.callback');

Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/shop/category/{slug}', [FrontendController::class, 'categoryWiseProduct'])->name('categoryWiseProduct');
Route::get('/shop/product/{slug}', [FrontendController::class, 'productDetails'])->name('productDetails');
//pages
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/faq', [FrontendController::class, 'faqsf'])->name('faqsf');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-and-condition', [FrontendController::class, 'termsCondition'])->name('termsCondition');
//Cart
Route::post('/product/cart/add/',[CartController::class, 'addToCart'])->name('addToCart');
Route::get('/product/cart/',[CartController::class, 'cart'])->name('cart');
Route::get('/product/cart/remove/{id}',[CartController::class, 'removeCartItem'])->name('removeCartItem');
//Blog
Route::get('/blog',[BlogController::class, 'showblogpost'])->name('frontendblog');
Route::get('/blog/{slug}',[BlogController::class, 'blogDetails'])->name('blogDetails');
Route::get('/blog/category/{slug}',[BlogController::class, 'categoryWiseBlog'])->name('categoryWiseBlog');
Route::post('/blog/search', [BlogController::class, 'blogSearch'])->name('blogSearch');
//Coupon
Route::post('/product/coupon/claim',[CouponController::class, 'couponClaim'])->name('couponClaim');
Route::get('/checkroute',[CouponController::class, 'checkroute'])->name('checkroute');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('userDashboard');
    Route::get('/edit/profile', [FrontendController::class, 'editProfile'])->name('editProfile');
    Route::post('/edit/profile/update', [FrontendController::class, 'profileUpdate'])->name('profileUpdate');
    Route::post('/edit/profile/image/update', [FrontendController::class, 'profileImageUpdate'])->name('profileImageUpdate');
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
    //Getway
    Route::get('/getway', [PaymentController::class, 'getway'])->name('getway');
    //Comment
    Route::post('/blog/comment/{slug}', [BlogController::class, 'insertComment'])->name('insertComment');
    //Review
    Route::post('/reviews/insert/{id}', [ReviewsController::class, 'insert'])->name('review');

    //Payment Getway

    //Stripe
    Route::get('stripe/payment', [StripePaymentController::class, 'payment'])->name('stirpe.payment');
    Route::get('stripe/success', [StripePaymentController::class, 'success'])->name('stirpe.success');
    Route::get('stripe/cancel', [StripePaymentController::class, 'cancel'])->name('stirpe.cancel');

    //Paypal
    Route::get('paypal/payment', [PaypalPaymentController::class, 'payment'])->name('paypal.payment');
    Route::get('paypal/success', [PaypalPaymentController::class, 'success'])->name('paypal.success');
    Route::get('paypal/cancel', [PaypalPaymentController::class, 'cancel'])->name('paypal.cancel');

    //Mollie
    Route::get('mollie/payment', [MolliePaymentController::class, 'payment'])->name('mollie.payment');
    Route::get('mollie/success', [MolliePaymentController::class, 'success'])->name('mollie.success');
    Route::get('mollie/cancel', [MolliePaymentController::class, 'cancel'])->name('mollie.cancel');

    //Razorpay
    Route::post('razorpay/payment', [RazorpayPaymentController::class, 'payment'])->name('razorpay.payment');

    //Instamojo
    Route::get('instamojo/payment',[InstamojoPaymentController::class, 'payment'])->name('instamojo.payment');
    Route::get('instamojo/callback', [InstamojoPaymentController::class, 'callback'])->name('instamojo.callback');


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
    Route::get('/product/gellery-image/delete/{id}', [ProductController::class, 'pgidelete'])->name('productgalleryimagedel');
    //Coupon
    Route::get('/coupon', [CouponController::class, 'index'])->name('coupon');
    Route::get('/coupon/add', [CouponController::class, 'show'])->name('couponadd');
    Route::post('/coupon/insert', [CouponController::class, 'insert'])->name('couponinsert');
    Route::get('/coupon/edit/{id}', [CouponController::class, 'edit'])->name('couponedit');
    Route::post('/coupon/update/{id}', [CouponController::class, 'update'])->name('couponupdate');
    Route::get('/coupon/delete/{id}', [CouponController::class, 'delete'])->name('coupondelete');

    //Currency
    Route::get('/currency', [CurrencyController::class, 'index'])->name('currency');
    Route::get('/currency/add', [CurrencyController::class, 'show'])->name('currencyadd');
    Route::post('/currency/insert', [CurrencyController::class, 'insert'])->name('currencyinsert');
    Route::get('/currency/edit/{id}', [CurrencyController::class, 'edit'])->name('currencyedit');
    Route::post('/currency/update/{id}', [CurrencyController::class, 'update'])->name('currencyupdate');
    Route::get('/currency/delete/{id}', [CurrencyController::class, 'delete'])->name('currencydelete');

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
    //Home Three
    Route::get('/add/banner/three', [BannerController::class, 'homeThreeBanner'])->name('homeThreeBanner');
    Route::post('/update/banner-one/home-three', [BannerController::class, 'hthboupdate'])->name('hthboupdate');
    Route::post('/update/banner-two/home-three', [BannerController::class, 'hthbtupdate'])->name('hthbtupdate');
    Route::post('/update/banner-left/home-three', [BannerController::class, 'hthblupdate'])->name('hthblupdate');
    Route::post('/update/banner-middle/home-three', [BannerController::class, 'hthbmupdate'])->name('hthbmupdate');
    Route::post('/update/banner-right/home-three', [BannerController::class, 'hthbrupdate'])->name('hthbrupdate');

    //Product Details Page
    Route::get('/product-details/banner',[BannerController::class, 'pdpagebannerIndex'])->name('pdpagebannerIndex');
    Route::post('/product-details-banner/update', [BannerController::class, 'productDetailsBanner'])->name('pdpbupdate');

    //Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::post('/slider/insert', [SliderController::class, 'insert'])->name('sliderInsert');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider-update');
    Route::get('/slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    //Testimonial
    Route::get('/testimonial',[TestimonialController::class, 'index'])->name('testimonial');
    Route::post('/testimonial/insert',[TestimonialController::class, 'insert'])->name('testimonial.insert');
    Route::get('/testimonial/edit/{id}',[TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}',[TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}',[TestimonialController::class, 'delete'])->name('testimonial.delete');

    //Reviews
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
    Route::post('/reviews/update/{id}', [ReviewsController::class, 'update'])->name('reviews.update');
    Route::get('/reviews/delete/{id}', [ReviewsController::class, 'delete'])->name('reviews.delete');
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
    Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('partner.update');
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

    //Home Three Instagram post
    Route::get('/instagram-post',[InstagramPostController::class, 'index'])->name('instagramPost');
    Route::post('/instagram-post/insert',[InstagramPostController::class, 'insert'])->name('instagramPostInsert');
    Route::get('/instagram-post/delete/{id}',[InstagramPostController::class, 'delete'])->name('instagramPostDelete');

    //Home Two Retrun policy
    Route::get('/home-tow/policy-section', [PolicyController::class, 'index'])->name('htpolicy');
    Route::post('/home-tow/policy-section/update', [PolicyController::class, 'update'])->name('htpolicyUpdate');

    //Home Three Video Section
    Route::get('/home-three/background-video',[H3VideoController::class, 'index'])->name('h3bvideo');
    Route::post('/home-three/background-video/update',[H3VideoController::class, 'update'])->name('h3bvideoUpdate');

    //Order Manage
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/order/new', [OrderController::class, 'newOrder'])->name('newOrder');
    Route::get('/order/delivery/process', [OrderController::class, 'deliveryInProcess'])->name('deliveryInProcess');
    Route::get('/order/complate', [OrderController::class, 'complateOrder'])->name('complateOrder');
    Route::get('/order/cancel', [OrderController::class, 'cancelOrder'])->name('cancelOrder');
    // Route::get('/order/invoice/{id}', [OrderController::class, 'orderInvoice'])->name('orderInvoice');
    Route::post('/order/status/{id}', [OrderController::class, 'orderStatus'])->name('orderStatus');

    //Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('adminProfile');
    Route::post('/pfofile/update', [ProfileController::class, 'profileUpdate'])->name('profileUpdate');
    Route::post('/password/update', [ProfileController::class, 'passwordUpdate'])->name('passwordUpdate');

    //Privacy Plicy
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacyPolicy.index');
    Route::get('/terms-and-condition', [TermsConditionController::class, 'index'])->name('termsConditon.index');
    Route::post('/privacy-policy/update', [PrivacyPolicyController::class, 'ppupdate'])->name('privacyPolicy.update');
    Route::post('/terms-condition/update', [TermsConditionController::class, 'tcupdate'])->name('termsCondition.update');


    //Email Template
    Route::get('/email-template', [EmailTemplateController::class, 'index'])->name('emailTemplate');
    Route::get('/email-template/insert/{id}', [EmailTemplateController::class, 'edit'])->name('emailTemplate.edit');
    Route::post('/email-template/update/{id}', [EmailTemplateController::class, 'update'])->name('emailTemplate.update');


    //Payment Getway Backend
    Route::get('/payment-getway', [PaymentGetwayController::class, 'index'])->name('pg.index');
    Route::post('/payment-getway/paypal/update', [PaymentGetwayController::class, 'paypalUpdate'])->name('paypal.update');
    Route::post('/payment-getway/stripe/update', [PaymentGetwayController::class, 'stripeUpdate'])->name('stripe.update');
    Route::post('/payment-getway/mollie/update', [PaymentGetwayController::class, 'mollieUpdate'])->name('mollie.update');




});


});
