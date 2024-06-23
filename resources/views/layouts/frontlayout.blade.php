<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset(setting('favicon')) }}">
    <link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/scroll_button.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom_spacing.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.exzoom.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/percircle.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/ranger_slider.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/mobile_menu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
</head>

<body class="{{ (setting('theme') == 'two') ? 'home_2' : '' }} {{ (setting('theme') == 'three') ? 'home_3' : '' }}">

    <!--=========================
        TOPBAR START
    ==========================-->
    @if (setting('topbar') == 'show')
    <section class="topbar {{ (setting('theme') == 'two') ? 'topbar_2' : '' }} {{ (setting('theme') == 'three') ? 'topbar_3' : '' }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 d-none d-md-block">
                    <ul class="topbar_info d-flex flex-wrap">
                        <li>
                            <a href="{{ topbarContent('phone') }}"><i class="fas fa-phone-alt"></i> {{ topbarContent('phone') }}</a>
                        </li>
                        <li>
                            <a href="mailto:{{ topbarContent('email') }}"><i class="fas fa-envelope-open-text"></i>
                                {{ topbarContent('email') }}</a>
                        </li>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i> {{ topbarContent('location') }}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-3">
                    <ul class="topbar_icon d-flex flex-wrap">
                        @foreach (socialLinks() as $item)
                            <li><a href="{{ $item->url }}"><i class="{{ $item->icon }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--=========================
        TOPBAR END
    ==========================-->


    <!--=========================
        HEADER START
    ==========================-->
    <header class="{{ (setting('theme') == 'two') ? 'header_2' : '' }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header_logo_area">
                        <a href="{{ route('index') }}" class="header_logo">
                            <img src="{{ asset(setting('logo')) }}" alt="Freshmat" class="img-fluid w-100">
                        </a>
                        <div class="mobile_menu_icon d-block d-lg-none" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="mobile_menu_icon"><i class="far fa-stream menu_icon_bar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <form action="{{ route('shop') }}" method="GET">
                        @csrf
                        <input type="text" placeholder="Search your product..." name="search" value="{{ old('search') }}">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="header_support">
                        <span class="icon"><i class="fal fa-headset"></i></span>
                        <h3>
                            55 0562-256
                            <span>24/7 Support Center</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=========================
        HEADER END
    ==========================-->

    
    <!--=========================
        MENU START
    ==========================-->
    <nav class="main_menu  {{ (setting('theme') == 'two') ? 'main_menu_2' : '' }} {{ (setting('theme') == 'three') ? 'main_menu_3' : '' }} d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="menu_category_bar">
                        <p>
                            <span>
                                <img src="{{asset('assets')}}/images/menu_category_icon.png" alt="category icon">
                            </span>
                            Browse Categories
                        </p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <ul class="menu_cat_item show_home toggle_menu">
                        @forelse (productCategories() as $category)
                        <li>
                            <a href="{{ route('categoryWiseProduct',$category->slug) }}">
                                <span>
                                    <img src="{{ asset($category->icon) }}" alt="category">
                                </span>
                                {{ $category->name }}
                            </a>
                        </li>
                        @empty
                            No Product Found!
                        @endforelse
                    </ul>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <ul class="menu_item">
                        <li class="relative_li">
                            <a class="{{ Route::currentRouteNamed('index','indexTwo','indexThree') ? 'active' : '' }}" href="{{ route('index') }}" href="{{ route('index') }}">home <i class="@if(setting('theme') == 'all') fas fa-chevron-down @endif"></i></a>
                            @if (setting('theme') == 'all')
                            <ul class="menu_droapdown">
                                <li><a class="{{ Route::currentRouteNamed('indexOne') ? 'active' : '' }}" href="{{ route('indexOne') }}">Home style 01</a></li>
                                <li><a class="{{ Route::currentRouteNamed('indexTwo') ? 'active' : '' }}" href="{{ route('indexTwo') }}">Home style 02</a></li>
                                <li><a class="{{ Route::currentRouteNamed('indexThree') ? 'active' : '' }}" href="{{ route('indexThree') }}">Home style 03</a></li>
                            </ul>
                            @endif
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteNamed('shop') ? 'active' : '' }}" href="{{ route('shop') }}">shop </a>
                        </li>
                        <li><a class="{{ Route::currentRouteNamed('frontendblog') ? 'active' : '' }}" href="{{ route('frontendblog') }}">blog</a></li>
                        <li><a class="{{ Route::currentRouteNamed('aboutUs') ? 'active' : '' }}" href="{{ route('contact') }}">About Us</a></li>
                        <li><a class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ route('contact') }}">contact</a></li>
                    </ul>
                    <ul class="menu_icon">
                        <li><a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight"><i class="far fa-shopping-basket"></i> <span class="{{ (Session::has('cart')) ? '' : 'd-none' }}">{{ (Session::has('cart')) ? count(Session::get('cart')) : '' }}</span></a>
                        </li>
                        <li><a href="{{ route('userWishlist') }}"><i class="far fa-heart"></i> <span class="{{ (wishlistTotalItem(Auth::id())) ? '' : 'd-none' }}">{{ (Auth::check()) ? wishlistTotalItem(Auth::id()) : '' }}</span></a></li>
                        <li><a href="{{ route('userDashboard') }}"><i class="far fa-user"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="mini_cart">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"> my cart <span>({{ cartTotal() }})</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="far fa-times"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    @if (Session::has('cart'))
                        @foreach ((Session::get('cart')) as $cart)
                        <li>
                            <div class="cart_img">
                                <img src="{{ asset($cart['thumbnail']) }}" alt="product" class="img-fluid w-100">
                                <a class="wsis__del_icon" href="{{ route('removeCartItem',$cart['productId']) }}"><i class="fas fa-minus-circle"></i></a>
                            </div>
                            <div class="cart_text">
                                <a class="cart_title" href="{{ route('productDetails',productSlug($cart['productId']))}}"> {{$cart['title']}} </a>
                                <p>${{ $cart['price'] }} x {{ $cart['quantity'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    @else
                        <li>No cart item found!</li>
                    @endif
                </ul>
                <h5>sub total <span>${{ subTotal() }}</span></h5>
                <div class="minicart_btn_area">
                    @if (Session::has('cart'))
                        <a class="common_btn" href="{{ route('cart') }}">view cart<span></span></a>
                    @else
                        <a class="common_btn" href="{{ route('shop') }}">Visit Shop<span></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--=========================
        MENU END
    ==========================-->


    <!--============================
        MOBILE MENU START
    ==============================-->
    <div class="mobile_menu_area">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fal fa-times"></i></button>
            <div class="offcanvas-body">

                <ul class="mobile_menu_header d-flex flex-wrap">
                    <li><a href="cart_view.html"><i class="far fa-shopping-basket"></i> <span>2</span></a>
                    </li>
                    <li><a href="dashboard_wishlist.html"><i class="far fa-heart"></i> <span>5</span></a></li>
                    <li><a href="dashboard.html"><i class="far fa-user"></i></a></li>
                </ul>

                <form class="mobile_menu_search">
                    <input type="text" placeholder="Search" name="">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>

                <div class="mobile_menu_item_area">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Categories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">menu</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">Fresh & Organic</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Sea Fish</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">meat</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Bakery & Biscuites</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Health & Beauty</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Freah Fruits</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Coffee & Drinks</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Cleaning</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Sea Fish</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Fresh & Organic</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Bakery & Biscuites</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Health & Beauty</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">home</a>
                                    <ul class="inner_menu">
                                        <li><a href="index.html">home style 01</a></li>
                                        <li><a href="index_2.html">home style 02</a></li>
                                        <li><a href="index_3.html">home style 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="about_us.html">about</a></li>
                                <li class="mobile_dropdown">
                                    <a href="#">shop</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li><a href="blogs.html">blog</a></li>
                                <li class="mobile_dropdown">
                                    <a href="#">pages</a>
                                    <ul class="inner_menu">
                                        <li><a href="about_us.html">about us</a></li>
                                        <li><a href="blogs_details.html">blog details</a></li>
                                        <li><a href="shop_details.html">shop details</a></li>
                                        <li><a href="cart_view.html">cart view</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="payment.html">Payment</a></li>
                                        <li><a href="dashboard.html">dashboard</a></li>
                                        <li><a href="order_tracking.html">order tracking</a></li>
                                        <li><a href="team.html">Our team</a></li>
                                        <li><a href="team_details.html">team details</a></li>
                                        <li><a href="error.html">error/404</a></li>
                                        <li><a href="faq.html">faq's</a></li>
                                        <li><a href="gallery.html">gallery</a></li>
                                        <li><a href="sign_in.html">sign in</a></li>
                                        <li><a href="sign_up.html">sign up</a></li>
                                        <li><a href="forgot_password.html">forgot password</a></li>
                                        <li><a href="privacy_policy.html">privacy policy</a></li>
                                        <li><a href="terms_condition.html">terms & condition</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="flash_sell.html">flash sell</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        MOBILE MENU END
    ==============================-->

    @yield('breadcrumb')
    @yield('content')

      <!--=========================
        FOOTER START 
    ==========================-->
    <footer class="mt_200 xs_mt_160 {{ (setting('theme') == 'two') ? 'footer_2' : '' }} {{ (setting('theme') == 'three') ? 'footer_3' : '' }}">
        <div class="footer_overlay">
            <div class="container">
                <div class="footer_info" style="background: url({{asset('assets')}}/images/footer_info_bg.jpg);">
                    <div class="row wow fadeInUp">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_info_item">
                                <div class="icon">
                                    <img src="{{ asset(footerTop(1)->icon) }}" alt="Icon" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ footerTop(1)->heading }}</h3>
                                    <p>{{ footerTop(1)->subheading }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_info_item">
                                <div class="icon">
                                    <img src="{{ asset(footerTop(2)->icon) }}" alt="Icon" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ footerTop(2)->heading }}</h3>
                                    <p>{{ footerTop(2)->subheading }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_info_item">
                                <div class="icon">
                                    <img src="{{ asset(footerTop(3)->icon) }}" alt="Icon" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ footerTop(3)->heading }}</h3>
                                    <p>{{ footerTop(3)->subheading }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer_info_item">
                                <div class="icon">
                                    <img src="{{ asset(footerTop(4)->icon) }}" alt="Icon" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ footerTop(4)->heading }}</h3>
                                    <p>{{ footerTop(4)->subheading }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-8">
                        <div class="footer_logo_area">
                            <a class="footer_logo" href="{{ route('index') }}">
                                <img src="{{ asset(setting('footerLogo')) }}" alt="Freshmat" class="img-fluid w-100">
                            </a>
                            <p>{{ footer()->shortInfo }}</p>
                            <span>Hello to : <a href="mailto:{{ footer()->email }}">{{ footer()->email }}</a></span>
                            <ul>
                                <li><span>Follow :</span></li>
                                @foreach (socialLinks() as $link)     
                                    <li><a href="{{ $link->url }}"><i class="{{ $link->icon }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="footer_link">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="shop.html">Milk & Dairy</a></li>
                                <li><a href="shop.html">Coffee & Drinks</a></li>
                                <li><a href="shop.html">Fresh & Fruits</a></li>
                                <li><a href="shop.html">Fresh Dessert</a></li>
                                <li><a href="shop.html">Cleaning Essential</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="footer_link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#">Aarong Dairy</a></li>
                                <li><a href="#">Alshifa Natural</a></li>
                                <li><a href="#">Agro Acres</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="footer_link">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#">Agriculture</a></li>
                                <li><a href="#">Organic Products</a></li>
                                <li><a href="#">Milk Sweet</a></li>
                                <li><a href="#">Delivery Service</a></li>
                                <li><a href="#">Fresh Vegetables</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="footer_link">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="about_us.html">About Us</a></li>
                                <li><a href="sign_in.html">Sign In</a></li>
                                <li><a href="sign_up.html">Sign Up</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="team.html">Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer_copyright mt_75">
                            <p>
                                {!! copyright() !!}
                            </p>
                            <ul>
                                <li>Payment by :</li>
                                <li>
                                    <img src="{{asset(footer()->paymentGetwayImage)}}" alt="payment" class="img-fluid w-100">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=========================
        FOOTER END
    ==========================-->


    <!--==========================
        SCROLL BUTTON START
    ===========================-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==========================
        SCROLL BUTTON END
    ===========================-->


    <!--jquery library js-->
    <script src="{{asset('assets')}}/js/jquery-3.7.0.min.js"></script>
    <!--bootstrap js-->
    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="{{asset('assets')}}/js/Font-Awesome.js"></script>
    <!--slick slider js-->
    <script src="{{asset('assets')}}/js/slick.min.js"></script>
    <!--isotope js-->
    <script src="{{asset('assets')}}/js/isotope.pkgd.min.js"></script>
    <!--venobox js-->
    <script src="{{asset('assets')}}/js/venobox.min.js"></script>
    <!--marquee animi-->
    <script src="{{asset('assets')}}/js/jquery.marquee.min.js"></script>
    <!--simply countdown js-->
    <script src="{{asset('assets')}}/js/simplyCountdown.js"></script>
    <!--scroll button js-->
    <script src="{{asset('assets')}}/js/scroll_button.js"></script>
    <!--counter-up js-->
    <script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.countup.min.js"></script>
    <!--exzoom js-->
    <script src="{{asset('assets')}}/js/jquery.exzoom.js"></script>
    <!--nice select js-->
    <script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
    <!--percircle js-->
    <script src="{{asset('assets')}}/js/percircle.js"></script>
    <!--price ranger js-->
    <script src="{{asset('assets')}}/js/ranger_jquery-ui.min.js"></script>
    <script src="{{asset('assets')}}/js/ranger_slider.js"></script>
    <!--select2 js-->
    <script src="{{asset('assets')}}/js/select2.min.js"></script>
    <!--sticky sidebar js-->
    <script src="{{asset('assets')}}/js/sticky_sidebar.js"></script>
    <!--aos js-->
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!--script js-->
    <script src="{{asset('assets')}}/js/main.js"></script>
    @include('sweetalert::alert')
    <script>
         var deals1 = {{ counter(1) }};
         var deals2 = {{ counter(2) }};
         var deals3 = {{ counter(3) }};
    </script>
</body>

</html>