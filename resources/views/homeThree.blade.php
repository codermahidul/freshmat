@extends('layouts.frontlayout')
@section('title','Freshmat')
@section('content')

    <!--=========================
        BANNER 3 START
    ==========================-->
    <section class="banne_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="banner_content">
                        <div class="row banner_slider">
                            @forelse ($sliders as $slider)   
                            <div class="col-xl-12">
                                <div class="single_slider" style="background: url({{ asset($slider->backgroundImg) }});">
                                    <div class="single_slider_text">
                                        <h3>{{ $slider->shortTitle }}</h3>
                                        <h1>{{ $slider->offerText }}</h1>
                                        <p>{{ $slider->description }}</p>
                                        <a class="common_btn" href="{{ $slider->link }}">shop now <span></span></a>
                                    </div>
                                </div>
                            </div>
                            @empty
                                No Slider Item found!
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="banne_3_add_item" style="background: url({{ asset('assets') }}/images/banner_3_add_bg_1.jpg);">
                                <div class="text">
                                    <h4>Summer Offer</h4>
                                    <h2>Healthy Organic Food</h2>
                                    <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="banne_3_add_item" style="background: url({{ asset('assets') }}/images/banner_3_add_bg_2.jpg);">
                                <div class="text">
                                    <h4>Special Offer</h4>
                                    <h2>Fresh Organic Food</h2>
                                    <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BANNER 3 END
    ==========================-->


    <!--=========================
        CATEGORIES 2 START
    ==========================-->
    <section class="categories_2 pt_110 xs_pt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_heading heading_left mb_20">
                        <h2>What Do You Looking For</h2>
                    </div>
                </div>
            </div>
            <div class="slider_padding">
                <div class="row category_slider_2">
                    @forelse ($productCategories as $productCategory)
                    <div class="col-xl-2">
                        <a href="{{ route('categoryWiseProduct',$productCategory->slug) }}" class="category_item">
                            <div class="icon">
                                <img src="{{ asset($productCategory->icon) }}" alt="category" class="img-fluid w-100">
                            </div>
                            <h4>{{ $productCategory->name }}</h4>
                        </a>
                    </div>
                    @empty
                        No category found!
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        CATEGORIES 2 END
    ==========================-->


    <!--=========================
        ADD BANNER 3 START
    ==========================-->
    <section class="add_banner_3 pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="add_banner_item" style="background: url({{ asset('assets') }}/images/banner_bg_7.jpg);">
                        <div class="add_banner_item_text">
                            <h2>Up to 50% off on Special Item</h2>
                            <p>Shop our selection of organic fresh
                                vegetables in a discounted price.
                                50% off</p>
                            <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="add_banner_item" style="background: url({{ asset('assets') }}/images/banner_bg_8.jpg);">
                        <div class="add_banner_item_text">
                            <h2>Get 10% off on Fruits Item</h2>
                            <p>Shop our selection of organic fresh
                                vegetables in a discounted price.
                                10% off</p>
                            <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="add_banner_item" style="background: url({{ asset('assets') }}/images/banner_bg_9.jpg);">
                        <div class="add_banner_item_text">
                            <h2>Get 75% Organic Vegetable</h2>
                            <p>Shop our selection of organic fresh
                                vegetables in a discounted price.
                                75% off</p>
                            <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        ADD BANNER 3 END
    ==========================-->


    <!--=========================
        POPULAR PRODUCTS START
    ==========================-->
    <section class="popular_products pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_50">
                        <h2>Our Popular Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 m-auto">
                    <div class="product_filter mb_25">
                        <button class=" active" data-filter="*">All Products</button>
                        <button data-filter=".vegetables">Vegetables</button>
                        <button data-filter=".fruits">Fruits</button>
                        <button data-filter=".nuts">Nuts</button>
                        <button data-filter=".drinks">Drinks</button>
                        <button data-filter=".root">Root</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits drinks">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_1.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                            <p>$20.00 <del>$25.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables root">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_2.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits nuts drinks">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_3.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Carrot Vegetables</a>
                            <p>$33.00 <del>$28.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables drinks root">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_4.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits root">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_5.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
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
                            <p>$45.00 <del>$50.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables nuts">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_6.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Orange Slice Mix</a>
                            <p>$29.00 <del>$35.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits nuts root">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_7.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Beef Butter Cake</a>
                            <p>$30.00 <del>$34.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables drinks">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset('assets') }}/images/product_3_img_8.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
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
        POPULAR PRODUCTS END
    ==========================-->


    <!--=========================
        COUNTDOWN 3 START
    ==========================-->
    <section class="countdown_3 countdown mt_115 xs_mt_75 pt_115 xs_pt_75 pb_115 xs_pb_75"
        style="background: url({{ asset('assets') }}/images/countdown_bg_2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="countdown_text">
                        <div class="section_heading heading_left">
                            <h2>Deals Of The Weeks</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod incididunt ut labore
                            et dolore magna aliqua quis ipsum</p>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <a class="common_btn" href="shop_details.html">shop now <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        COUNTDOWN 3 END
    ==========================-->


    <!--=========================
        TEAM 2 START
    ==========================-->
    <section class="team_2 pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-10">
                    <div class="section_heading heading_left">
                        <h2>Our Expert Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit,sed do eiusmod incididun Lorem ipsum
                            dolor sit amet, consectetur adipi scing elit</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row team_2_slider">
                        <div class="col-xl-4">
                            <div class="single_team_2">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/team_2_img_1.jpg" alt="team" class="img-fluid w-100">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a class="title" href="team_details.html">Druid Wensleydale</a>
                                <p>CEO- Founder</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_team_2">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/team_2_img_2.jpg" alt="team" class="img-fluid w-100">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a class="title" href="team_details.html">Bodrum Salvador</a>
                                <p>CEO- Founder</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_team_2">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/team_2_img_3.jpg" alt="team" class="img-fluid w-100">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a class="title" href="team_details.html">Burgundy Fleming</a>
                                <p>CEO- Founder</p>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_team_2">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/team_2_img_4.jpg" alt="team" class="img-fluid w-100">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a class="title" href="team_details.html">Burgundy Fleming</a>
                                <p>CEO- Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        TEAM 2 END
    ==========================-->


    <!--=========================
        TESTIMONIAL 3 START
    ==========================-->
    <section class="testimonial_3 pt_115 xs_pt_75 pb_115 xs_pb_75"
        style="background: url({{ asset('assets') }}/images/testimonial_bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-5">
                    <div class="testimonial_3_img">
                        <img src="{{ asset('assets') }}/images/testimonial_3_large_img.png" alt="testimonial" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="section_heading heading_left mb_50">
                        <h2>Our Sweeet Client Say</h2>
                    </div>
                    <div class="row testi_3_slider">
                        <div class="col-12">
                            <div class="testimonial_3_item">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/testimonial_3_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <p class="review_text">Lorem ipsum dolor sit amet, consectetur adi
                                        piscing elit,sed do eiusmod incididunt ut lab
                                        ore et dolore magna.</p>
                                    <h3>Fleece Marig</h3>
                                    <p class="designation">Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="testimonial_3_item">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/testimonial_3_img_2.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <p class="review_text">Lorem ipsum dolor sit amet, consectetur adi
                                        piscing elit,sed do eiusmod incididunt ut lab
                                        ore et dolore magna.</p>
                                    <h3>Bartholomew</h3>
                                    <p class="designation">Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="testimonial_3_item">
                                <div class="img">
                                    <img src="{{ asset('assets') }}/images/testimonial_3_img_3.jpg" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </p>
                                    <p class="review_text">Lorem ipsum dolor sit amet, consectetur adi
                                        piscing elit,sed do eiusmod incididunt ut lab
                                        ore et dolore magna.</p>
                                    <h3>Hasin Sikdar</h3>
                                    <p class="designation">Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        TESTIMONIAL 3 END
    ==========================-->


    <!--=========================
        VIDEO START
    ==========================-->
    <section class="video pt_115 xs_pt_75 pb_115 xs_pb_75" style="background: url({{ asset('assets') }}/images/video_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="video_content">
                        <div class="text">
                            <h3>50% Off In This Week</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                incididunt ut labore et dolore magna aliqua.</p>
                            <a class="common_btn" href="shop_details.html">shop now</a>
                        </div>
                        <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/nqye02H_H6I?si=Yq79QYJhfIT_wkC_">
                            <i class=" fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        VIDEO START
    ==========================-->


    <!--=========================
        DOWNLOAD 2 START
    ==========================-->
    <section class="download_2 pt_220 xs_pt_80">
        <div class="container">
            <div class="download_2_bg">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="download_text">
                            <div class="section_heading heading_left">
                                <h4>Download This App</h4>
                                <h2>Simple Way to Order Your Food Faster</h2>
                            </div>
                            <P>It is a long established fact that a reader will be distracted by the readable content of
                                a page when.</P>
                            <ul>
                                <li>
                                    <a class="common_btn" href="#"><i class="fab fa-apple" aria-hidden="true"></i> Apple
                                        Store
                                        <span style="top: 198.062px; left: 161px;"></span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-play"></i>Play Store</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="download_2_img">
                            <img src="{{ asset('assets') }}/images/download_img_2.png" alt="download" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DOWNLOAD 2 END
    ==========================-->


    <!--=========================
        BLOG 3 START
    ==========================-->
    @include('components.frontend.global.blog')
    <!--=========================
        BLOG 3 END
    ==========================-->


    <!--=========================
        BRAND 3 START
    ==========================-->
    @include('components.frontend.global.brand')
    <!--=========================
        BRAND 3 END
    ==========================-->

@endsection