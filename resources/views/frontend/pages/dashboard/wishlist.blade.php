@extends('layouts.frontlayout')
@section('title','Dashboard | Wishlist')
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
                            <h1>Wishlist</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('userDashboard') }}">Dashboard</a></li>
                                <li><a href="">Wishlist</a></li>
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
    <!--================================
        DASHBOARD WISHLIST START
    =================================-->
    <section class="dashboard pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                @include('components.frontend.dashboard.menu')
                @include('components.frontend.dashboard.wishlist')
            </div>
        </div>
    </section>

    @foreach ($wishlists as $wishlist)
    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal{{ $wishlist->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="cart_popup_modal_img">
                                    <img src="{{ asset($wishlist->products->thumbnail) }}" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="product_det_text">
                                    <h2 class="details_title">{{ $wishlist->products->title }}</h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">${{ $wishlist->products->selePrice }} <del>{{ ($wishlist->products->regularPrice) ? '$' : '' }}{{ $wishlist->products->regularPrice }}</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti </span> (in {{ $wishlist->products->unitType }}) :</p>
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
                                        <a class="love" href="{{ route('adToWishlist',$wishlist->products->id) }}"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span> {{ $wishlist->products->productcategories->name }}</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">{{ $wishlist->products->tags }}</a></li>
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
    @endforeach
    <!--================================
        DASHBOARD WISHLIST END
    =================================-->
@endsection