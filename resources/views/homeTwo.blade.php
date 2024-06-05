@extends('layouts.frontlayout')
@section('title','Freshmat')
@section('content')

    <!--=========================
        BANNER 2 START
    ==========================-->
    <section class="banner_2" style="background: url({{ asset(banner(9)->backgroundImg) }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-md-9 col-lg-8 wow fadeInLeft">
                    <div class="banner_2_text single_slider_text">
                        <h3>{{ banner(9)->shortTitle }}</h3>
                        <h1>{{ banner(9)->offerText }}</h1>
                        <p>{{ banner(9)->description }}</p>
                        <a class="common_btn" href="{{ banner(9)->link }}">shop now <i class="fas fa-long-arrow-right"></i>
                            <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BANNER 2 END
    ==========================-->


    <!--=========================
        SUPPORT START
    ==========================-->
    <section class="support pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="support_content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/support_icon_1.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/support_icon_2.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Free shipping</h3>
                                    <p>On all orders over $60.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/support_icon_3.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Store locator</h3>
                                    <p>Find your nearest store</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SUPPORT END
    ==========================-->


    <!--=========================
        ADD BANNER 2 START
    ==========================-->
    <section class="add_banner_2 pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="{{ asset(banner(5)->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h5>{{ banner(5)->shortTitle }}</h5>
                            <h3>{{ banner(5)->offerText }}</h3>
                            <p>{{ banner(5)->description }}</p>
                            <a class="common_btn" href="{{ banner(5)->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url({{ asset(banner(6)->backgroundImg) }}">
                                <div class="add_banner_item_text">
                                    <h4>{{ banner(6)->shortTitle }}</h4>
                                    <h2>{{ banner(6)->offerText }}</h2>
                                    <p>{{ banner(6)->description }}</p>
                                    <a class="common_btn" href="{{ banner(6)->link }}">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url({{ asset(banner(7)->backgroundImg) }})">
                                <div class="add_banner_item_text">
                                    <h4>{{ banner(7)->shortTitle }}</h4>
                                    <h2>{{ banner(7)->offerText }}</h2>
                                    <p>{{ banner(7)->description }}</p>
                                    <a class="common_btn" href="{{ banner(7)->link }}">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        ADD BANNER 2 END
    ==========================-->


    <!--=========================
        NEW PRODUCTS START
    ==========================-->
    <section class="new_products pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto wow fadeInUp">
                    <div class="section_heading mb_20">
                        <h4>{{ sectionTitle(8)->subheading }}</h4>
                        <h2>{{ sectionTitle(8)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_1.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">25% Off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                            <p>$20.00 <del>$25.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_2.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="new">new</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_3.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="hot">hot</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Carrot Vegetables</a>
                            <p>$33.00 <del>$28.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_4.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">35% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_5.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="hot">hot</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Carrot Vegetables</a>
                            <p>$45.00 <del>$50.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_6.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">40% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Orange Slice Mix</a>
                            <p>$29.00 <del>$35.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_7.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="new">new</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Beef Butter Cake</a>
                            <p>$30.00 <del>$34.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/home2_product_img_8.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">30% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Fresh Mango Fruits</a>
                            <p>$22.00 <del>$26.00</del> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="cart_popup_modal_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_4.jpg" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="product_det_text">
                                    <h2 class="details_title">Nestle Nescafe Classic Instant</h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">$10.50 <del>$12.00</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti Weight</span> (in kg) :</p>
                                        <div class="button_area">
                                            <button>-</button>
                                            <input type="text" placeholder="01">
                                            <button>+</button>
                                        </div>
                                        <h3>= $10.50</h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i>
                                            Add To
                                            Cart
                                            <span></span></a>
                                        <a class="love" href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span>Coffee</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">Black Coffee, </a></li>
                                        <li><a href="#">Popular,</a></li>
                                        <li><a href="#">Top Sell</a></li>
                                    </ul>
                                    <ul class="share">
                                        <li>Share with friends:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
        NEW PRODUCTS END
    ==========================-->


    <!--=========================
        COUNTDOWN 2 START
    ==========================-->
    <section class="countdown_2 mt_120 xs_mt_80 pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="countdown_2_area">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 wow fadeInLeft">
                        <div class="countdown_text">
                            <div class="section_heading heading_left">
                                <h4>{{ deals(2)->shortTitle }}</h4>
                                <h2>{{ deals(2)->offerText }}</h2>
                            </div>
                            <p>{{ deals(2)->description }}</p>
                            <div class="simply-countdown simply-countdown-two"></div>
                            <a class="common_btn" href="{{ deals(2)->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInRight">
                        <div class="countdown_img">
                            <img src="{{ asset(deals(2)->backgroundImg) }}" alt="coint" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        COUNTDOWN 2 END
    ==========================-->


    <!--=========================
        BEST SELL START
    ==========================-->
    <section class="best_sell mt_120 xs_mt_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_heading heading_left mb_25 wow fadeInLeft">
                        <h4>{{ sectionTitle(9)->subheading }}</h4>
                        <h2>{{ sectionTitle(9)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-4 wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="{{ asset(banner(8)->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h5>{{ banner(8)->shortTitle }}</h5>
                            <h3>{{ banner(8)->offerText }}</h3>
                            <a class="common_btn" href="{{ banner(8)->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-6 col-lg-8 wow fadeInUp">
                    <div class="row best_sell_slider">
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_1.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="off">25% Off</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <p>$20.00 <del>$25.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_2.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="new">new</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_3.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="hot">hot</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <p>$33.00 <del>$28.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_4.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="off">35% off</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BEST SELL END
    ==========================-->


    <!--=============================
        SPECIAL PRODUCT 2 START
    ==============================-->
    <section class="special_product_2 pt_110 xs_pt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>{{ sectionTitle(10)->subheading }}</h4>
                        <h2>{{ sectionTitle(10)->heading }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_1.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 70%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Butter garlic crab</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$10.00 <del>$12.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_3.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 40%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Three Carrot</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$17.00 <del>$20.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_2.jpg" alt="product" class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Bengal Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$13.00 <del>$15.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp">
                    <div class="special_product_banner">
                        <img src="{{ asset(banner(10)->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h3>{{ banner(10)->offerText }}</h3>
                            <p>{{ banner(10)->description }}</p>
                            <a class="common_btn" href="{{ banner(10)->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_4.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 50%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$29.00 <del>$32.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_5.jpg" alt="product" class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Orange Slice Mix</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$20.00 <del>$22.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset('assets') }}/images/special_product_6.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 30%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$16.00 <del>$18.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        SPECIAL PRODUCT 2 END
    ==============================-->


    <!--=============================
        TESTIMONIAL 2 START
    ==============================-->
    <section class="testimonial_2 mt_120 xs_mt_80 pt_120 xs_pt_80 pb_220 xs_pb_180">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 wow fadeInLeft">
                    <div class="testimonial_2_text">
                        <div class="section_heading heading_left mb_25">
                            <h4>{{ sectionTitle(11)->subheading }}</h4>
                            <h2>{{ sectionTitle(11)->heading }}</h2>
                        </div>
                        <p>{{ sectionTitle(11)->description }}</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row testi_slider_2">
                        @forelse (testimonial() as $testimonial)
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="{{ asset($testimonial->photo) }}" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <p class="review_text">{{ $testimonial->quote }}</p>
                                <div class="text">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <p>{{ $testimonial->designation }}</p>
                                </div>
                                <p class="rating">
                                    @php
                                    for ($i=0; $i < $testimonial->rating ; $i++) { 
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                    @endphp
                                </p>
                            </div>
                        </div>
                        @empty
                            No testimonial found!
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TESTIMONIAL 2 END
    ==============================-->


    <!--=============================
        INSTAGRAM PHOTO START
    ==============================-->
    <section class="instagram_photo">
        <div class="row insta_slider">
            @forelse ($instagramPost as $post)
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="{{ asset($post->image) }}" alt="instagram" class="img-fluid w-100">
                    @if (!$post->link == null)
                    <a target="_blank" href="{{ $post->link }}"> <i class="fab fa-instagram"></i> </a>
                    @endif
                </div>
            </div>
            @empty
                No post found!
            @endforelse
        </div>
    </section>
    <!--=============================
        INSTAGRAM PHOTO END
    ==============================-->


    <!--=========================
        BLOG 2 START
    ==========================-->
    @include('components.frontend.global.blog')
    <!--=========================
        BLOG 2 END
    ==========================-->


    <!--=========================
        BRAND 2 START
    ==========================-->
    @include('components.frontend.global.brand')
    <!--=========================
        BRAND 2 END
    ==========================-->

@endsection