@extends('layouts.frontlayout')
@section('title', 'Freshmat')
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
                        <a class="common_btn" href="{{ banner(9)->link }}">{{ __('shop now') }} <i class="fas fa-long-arrow-right"></i>
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
                                    <img src="{{ asset(htPolicy(1)->icon) }}" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ htPolicy(1)->heading }}</h3>
                                    <p>{{ htPolicy(1)->subheading }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset(htPolicy(2)->icon) }}" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ htPolicy(2)->heading }}</h3>
                                    <p>{{ htPolicy(2)->subheading }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset(htPolicy(3)->icon) }}" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>{{ htPolicy(3)->heading }}</h3>
                                    <p>{{ htPolicy(3)->subheading }}</p>
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
                            <a class="common_btn" href="{{ banner(5)->link }}">{{ __('shop now') }} <i
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
                                    <a class="common_btn" href="{{ banner(6)->link }}">{{ __('shop now') }} <i
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
                                    <a class="common_btn" href="{{ banner(7)->link }}">{{ __('shop now') }} <i
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
                @foreach ($latestProduct as $product)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                        <div class="single_product_2 single_product">
                            <div class="single_product_img">
                                <img src="{{ asset($product->thumbnail) }}" alt="Product" class="img_fluid w-100">
                                <ul>
                                    <li><a href="" data-bs-toggle="modal"
                                            data-bs-target="#cart_popup_modal_{{ $product->id }}"><i
                                                class="far fa-shopping-basket"></i></a></li>
                                    <li><a href="{{ route('productDetails', $product->slug) }}"><i
                                                class="far fa-eye"></i></a></li>
                                    <li><a class="{{ wishlistHave($product->id) == 1 ? 'have' : '' }}"
                                            href="{{ route('adToWishlist', $product->id) }}"><i
                                                class="far fa-heart"></i></a></li>
                                </ul>
                                @if ($product->regularPrice)
                                    <span class="off">{{ __('save') }}
                                        {{ round((($product->regularPrice - $product->selePrice) / $product->regularPrice) * 100) }}%</span>
                                @endif
                            </div>
                            <div class="single_product_text">
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                <a class="title"
                                    href="{{ route('productDetails', $product->slug) }}">{{ $product->title }}</a>
                                <p>${{ $product->selePrice }}
                                    <del>{{ $product->regularPrice ? '$' : '' }}{{ $product->regularPrice }}</del> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($latestProduct as $product)
        <form action="{{ route('addToCart') }}" method="post">
            @csrf
            <div class="cart_popup_modal">
                <div class="modal fade" id="cart_popup_modal_{{ $product->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="cart_popup_modal_img">
                                            <img src="{{ asset($product->thumbnail) }}" alt="Product img-fluid w-100">
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
                                                <span>{{ __('Review (20)') }}</span>
                                            </p>
                                            <p class="price">${{ $product->selePrice }}
                                                <del>{{ $product->regularPrice ? '$' : '' }}{{ $product->regularPrice }}</del>
                                            </p>
                                            <div class="details_quentity_area">
                                                <p><span>{{ __('Qti') }} </span> ({{ __('in') }} {{ $product->unitType }}) :</p>
                                                <div class="button_area">
                                                    <button type="button" class="decrement">-</button>
                                                    <input type="text" placeholder="01"
                                                        value="{{ cartQti($product->id) }}" name="quantity" class="quantity">
                                                    <button type="button" class="increment">+</button>
                                                    <input type="hidden" class="selePrice"
                                                        value="{{ $product->selePrice }}">
                                                </div>
                                                <h3>= $<span class="mathPrice">{{ $product->selePrice * cartQti($product->id)}}</span></h3>
                                            </div>
                                            <div class="details_cart_btn">
                                                <button type="submit" class="common_btn"><i
                                                        class="far fa-shopping-basket"></i>{{ __('Add To Cart') }}<span></span></button>
                                                <a class="love {{ wishlistHave($product->id) == 1 ? 'have' : '' }}"
                                                    href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a>
                                            </div>
                                            <p class="category"><span>{{ __('Category') }}:</span>{{ __('Coffee') }}</p>
                                            <ul class="share">
                                                <li>{{ __('Share with friends') }}:</li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('productDetails', $product->slug) }}&t={{ $product->title }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/share?text={{ $product->title }}&url={{ route('productDetails', $product->slug) }}"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('productDetails', $product->slug) }}&title={{ $product->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="productId" value="{{ $product->id }}">
        </form>
    @endforeach
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
                            <a class="common_btn" href="{{ deals(2)->link }}">{{ __('shop now') }} <i
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
                            <a class="common_btn" href="{{ banner(8)->link }}">{{ __('shop now') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-6 col-lg-8 wow fadeInUp">
                    <div class="row best_sell_slider">
                        @foreach ($specialProduct as $item)
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset($item->product->thumbnail) }}" alt="Product"
                                        class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cart_popup_modal_{{ $item->product->id }}"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="{{ route('productDetails',$item->product->slug) }}"><i class="far fa-eye"></i></a></li>
                                        <li><a class="{{ wishlistHave($item->product->id) == 1 ? 'have' : '' }}" href="{{ route('adToWishlist',$item->product->id) }}"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    @if ($item->product->regularPrice)
                                    <span class="off">{{ __('save') }}
                                        {{ round((($item->product->regularPrice - $item->product->selePrice) / $item->product->regularPrice) * 100) }}%</span>
                                @endif
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="{{ route('productDetails',$item->product->slug) }}">{{ $item->product->title }}</a>
                                    <p class="price">${{ $item->product->selePrice }}
                                        <del>{{ $item->product->regularPrice ? '$' : '' }}{{ $item->product->regularPrice }}</del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach ($specialProduct as $item)
        <form action="{{ route('addToCart') }}" method="post">
            @csrf
            <div class="cart_popup_modal">
                <div class="modal fade" id="cart_popup_modal_{{ $item->product->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="cart_popup_modal_img">
                                            <img src="{{ asset($item->product->thumbnail) }}" alt="Product img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="product_det_text">
                                            <h2 class="details_title">{{ $item->product->title }}</h2>
                                            <p class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                                <span>{{ __('Review (20)') }}</span>
                                            </p>
                                            <p class="price">${{ $item->product->selePrice }}
                                                <del>{{ $item->product->regularPrice ? '$' : '' }}{{ $item->product->regularPrice }}</del>
                                            </p>
                                            <div class="details_quentity_area">
                                                <p><span>Qti </span> (in {{ $item->product->unitType }}) :</p>
                                                <div class="button_area">
                                                    <button type="button" class="decrement">-</button>
                                                    <input type="text" placeholder="01"
                                                        value="{{ cartQti($item->product->id) }}" name="quantity" class="quantity">
                                                    <button type="button" class="increment">+</button>
                                                    <input type="hidden" class="selePrice"
                                                        value="{{ $item->product->selePrice }}">
                                                </div>
                                                <h3>= $<span class="mathPrice">{{ $item->product->selePrice * cartQti($product->id)}}</span></h3>
                                            </div>
                                            <div class="details_cart_btn">
                                                <button type="submit" class="common_btn"><i
                                                        class="far fa-shopping-basket"></i>{{ __('Add To Cart') }}<span></span></button>
                                                <a class="love {{ wishlistHave($item->product->id) == 1 ? 'have' : '' }}"
                                                    href="{{ route('adToWishlist',$item->product->id) }}"><i class="far fa-heart"></i></a>
                                            </div>
                                            <p class="category"><span>{{ __('Category') }}:</span>{{ __('Coffee') }}</p>
                                            <ul class="share">
                                                <li>{{ __('Share with friends') }}:</li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('productDetails', $item->product->slug) }}&t={{ $item->product->title }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/share?text={{ $item->product->title }}&url={{ route('productDetails', $item->product->slug) }}"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('productDetails', $item->product->slug) }}&title={{ $item->product->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="productId" value="{{ $product->id }}">
        </form>
    @endforeach
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
                        @foreach ($sbproduct1 as $product)
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="product"
                                        class="img-fluid w-100">
                                        @if ($product->regularPrice)
                                        <span class="discount">save
                                            {{ round((($product->regularPrice - $product->selePrice) / $product->regularPrice) * 100) }}%</span>
                                    @endif
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp">
                    <div class="special_product_banner">
                        <img src="{{ asset(banner(10)->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h3>{{ banner(10)->offerText }}</h3>
                            <p>{{ banner(10)->description }}</p>
                            <a class="common_btn" href="{{ banner(10)->link }}">{{ __('shop now') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        @foreach ($sbproduct2 as $product)
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="product"
                                        class="img-fluid w-100">
                                        @if ($product->regularPrice)
                                        <span class="discount">save
                                            {{ round((($product->regularPrice - $product->selePrice) / $product->regularPrice) * 100) }}%</span>
                                    @endif
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>${{ $product->selePrice }} <del>{{ $product->regularPrice ? "$" : '' }}{{ $product->regularPrice }}</del></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                        <img src="{{ asset($testimonial->photo) }}" alt="testimonial"
                                            class="img-fluid w-100">
                                    </div>
                                    <p class="review_text">{{ $testimonial->quote }}</p>
                                    <div class="text">
                                        <h3>{{ $testimonial->name }}</h3>
                                        <p>{{ $testimonial->designation }}</p>
                                    </div>
                                    <p class="rating">
                                        @php
                                            for ($i = 0; $i < $testimonial->rating; $i++) {
                                                echo '<i class="fas fa-star"></i>';
                                            }
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        @empty
                            {{ __('No testimonial found!') }}
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
                {{ __('No post found!') }}
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


@push('scripts')
    <script>
        $(document).ready(function() {
    $('.details_quentity_area').each(function() {
        let $detailsQuentityArea = $(this);
        let $buttonArea = $detailsQuentityArea.find('.button_area');
        let $quantityInput = $buttonArea.find('.quantity');
        let $mathPrice = $detailsQuentityArea.find('.mathPrice');
        let pricePerItem = parseFloat($buttonArea.find('.selePrice').val()); // Get initial price

        // Function to update price based on current quantity
        function updatePrice() {
            let quantity = parseInt($quantityInput.val());
            let totalPrice = quantity * pricePerItem;
            $mathPrice.text(totalPrice.toFixed(2)); // Update displayed price
        }

        // Decrement button click event
        $buttonArea.on('click', '.decrement', function() {
            let currentQuantity = parseInt($quantityInput.val());
            if (currentQuantity > 1) {
                $quantityInput.val(currentQuantity - 1);
                updatePrice(); // Update price when quantity changes
            }
        });

        // Increment button click event
        $buttonArea.on('click', '.increment', function() {
            let currentQuantity = parseInt($quantityInput.val());
            $quantityInput.val(currentQuantity + 1);
            updatePrice(); // Update price when quantity changes
        });

        // Optional: Update price if quantity input is manually changed
        $quantityInput.on('input', function() {
            updatePrice();
        });

        // Initial update of price on page load
        updatePrice();
    });
});
    </script>
@endpush

