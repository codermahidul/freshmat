@extends('layouts.frontlayout')
@section('title','Shop | '.$categoryName)
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
                            <h1>{{ $categoryName }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('shop') }}">{{ __('Shop') }}</a></li>
                                <li><a >{{ $categoryName }}</a></li>
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
                            <p>{{ __('Showing 1–6 of 10 results') }}</p>
                            <div class="filter">
                                <p>{{ __('Sort by') }}:</p>
                                <select class="select_js">
                                    <option value=""> {{ __('Default Sorting') }}</option>
                                    <option value="">{{ __('low to high') }}</option>
                                    <option value="">{{ __('high to low') }}</option>
                                    <option value="">{{ __('Best rating') }}</option>
                                    <option value="">{{ __('best sell') }}</option>
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
                            <h3>{{ __('Filter by price') }}</h3>
                            <div class="price_ranger">
                                <input type="hidden" id="slider_range" class="flat-slider" />
                            </div>
                        </div>
                        {{-- sidebar categories --}}
                        @include('components.frontend.global.sidebarcategories')
                        <div class="shop_sidebar_product">
                            <h3>{{ __('Featured Products') }}</h3>
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
                        @forelse ($categoryWiseProducts as $product)
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                                    <p>${{ $product->selePrice }} <del>{{ ($product->regularPrice == '') ? '' : '$' }}{{ $product->regularPrice }}</del> </p>
                                    <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal{{ $product->id }}"><i class="far fa-shopping-basket"></i> Add To
                                        Cart
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        @empty
                            {{ __('No Products found!') }}
                        @endforelse
                    </div>
                    {{-- Pagination --}}
                    {{ $categoryWiseProducts->links('pagination.frontendPagination') }}
                </div>
            </div>
        </div>
    </section>

    @foreach ($categoryWiseProducts as $product)
    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="cart_popup_modal_img">
                                    <img src="{{asset($product->thumbnail)}}" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="product_det_text">
                                    <h2 class="details_title">{{ $product->title }}</h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti</span> (in {{ $product->unitType }}) :</p>
                                        <div class="button_area">
                                            <button>-</button>
                                            <input type="text" placeholder="01">
                                            <button>+</button>
                                        </div>
                                        <h3>= $10.50</h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <a class="common_btn" href="{{ route('addToCart',$product->id) }}"><i class="far fa-shopping-basket"></i>
                                            {{ __('Add To
                                            Cart') }}
                                            <span></span></a>
                                        <a class="love" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>{{ __('Category') }}:</span>{{ $product->productcategories->name }}</p>
                                    <ul class="tags">
                                        <li>{{ __('Tags') }}:</li>
                                        <li><a href="#">{{ $product->tags }}</a></li>
                                    </ul>
                                    <ul class="share">
                                        <li>{{ __('Share with friends') }}:</li>
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
    @endforeach
    <!--=========================
        SHOP PAGE END
    ==========================-->
@endsection
