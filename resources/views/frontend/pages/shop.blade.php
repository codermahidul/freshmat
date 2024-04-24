@extends('layouts.frontlayout')
@section('title','Shop')
@section('breadcrumb')
          <!--=========================
        BREADCRUMB START
    ==========================-->
    <section class="page_breadcrumb" style="background: url({{ asset('assets') }}/images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text wow fadeInUp">
                            <h1>Shop</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BREADCRUMB START
    ==========================-->
@endsection
@section('content')
    <!--=========================
        SHOP PAGE START
    ==========================-->
    <section class="shop_page pt_120 xs_pt_80">
        <div class="container">
            <div class="shop_page_header_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp">
                        <div class="shop_header_search">
                            <form>
                                <input type="text" placeholder="Search...">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp">
                        <div class="shop_page_header">
                            <p>Showing 1–6 of 10 results</p>
                            <div class="filter">
                                <p>Sort by:</p>
                                <select class="select_js">
                                    <option value=""> Default Sorting</option>
                                    <option value="">low to high</option>
                                    <option value="">high to low</option>
                                    <option value="">Best rating</option>
                                    <option value="">best sell</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-8 col-md-6 order-2 wow fadeInLeft">
                    <div id="sticky_sidebar" class="shop_sidebar">
                        <div class="shop_sidebar_filter shop_sidebar_item">
                            <h3>Filter by price</h3>
                            <div class="price_ranger">
                                <input type="hidden" id="slider_range" class="flat-slider" />
                            </div>
                        </div>
                        <div class="shop_sidebar_category shop_sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="shop.html">Vegetable <span>(08)</span></a></li>
                                <li><a href="shop.html">Nuts & Dried Foods <span>(05)</span></a></li>
                                <li><a href="shop.html">Milk & Dairy <span>(02)</span></a></li>
                                <li><a href="shop.html">Halal Lamb & Goat <span>(19)</span></a></li>
                                <li><a href="shop.html">Halal Deli <span>(25)</span></a></li>
                                <li><a href="shop.html">Goat meat <span>(32)</span></a></li>
                                <li><a href="shop.html">Fresh Halal Beef <span>(44)</span></a></li>
                                <li><a href="shop.html">Fresh & Fruits <span>(16)</span></a></li>
                            </ul>
                        </div>
                        <div class="shop_sidebar_product">
                            <h3>Featured Products</h3>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets') }}/images/sidebar_product_1.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="shop_details.html">Porcelain Garlic</a>
                                        <p>$15.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets') }}/images/sidebar_product_2.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="shop_details.html">Vegetables Meat</a>
                                        <p>$20.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('assets') }}/images/sidebar_product_3.jpg" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="shop_details.html">Orange Slice Mix</a>
                                        <p>$32.00</p>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-lg-2 col-lg-8 xs_mb_50 shop_mb_margin">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_1.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <p>$20.00 <del>$25.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_2.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_3.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <p>$33.00 <del>$28.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_4.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_5.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <p>$45.00 <del>$50.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_6.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Orange Slice Mix</a>
                                    <p>$29.00 <del>$35.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_7.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Beef Butter Cake</a>
                                    <p>$30.00 <del>$34.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_8.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Fresh Mango Fruits</a>
                                    <p>$22.00 <del>$26.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset('assets') }}/images/product_img_2.jpg" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Pagination --}}
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
                            <div class="col-xl-6">
                                <div class="cart_popup_modal_img">
                                    <img src="{{ asset('assets') }}/images/home2_product_img_4.jpg" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6">
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
                                        <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i> Add To
                                            Cart
                                            <span></span></a>
                                        <a class="love" href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span> Coffee</p>
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
        SHOP PAGE END
    ==========================-->
@endsection