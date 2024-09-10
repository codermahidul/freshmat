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
                            <div class="banne_3_add_item" style="background: url({{ asset(banner(11)->backgroundImg) }})">
                                <div class="text">
                                    <h4>{{ banner(11)->shortTitle }}</h4>
                                    <h2>{{ banner(11)->offerText }}</h2>
                                    <a class="common_btn" href="{{ banner(11)->link }}">shop now <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="banne_3_add_item" style="background: url({{ asset(banner(12)->backgroundImg) }})">
                                <div class="text">
                                    <h4>{{ banner(12)->shortTitle }}</h4>
                                    <h2>{{ banner(12)->offerText }}</h2>
                                    <a class="common_btn" href="{{ banner(12)->link }}">shop now <span></span></a>
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
                        <h2>{{ sectionTitle(14)->heading }}</h2>
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
                    <div class="add_banner_item" style="background: url({{ asset(banner(13)->backgroundImg) }})">
                        <div class="add_banner_item_text">
                            <h2>{{ banner(13)->offerText }}</h2>
                            <p>{{ banner(13)->description }}</p>
                            <a class="common_btn" href="{{ banner(13)->link }}">shop now <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="add_banner_item" style="background: url({{ asset(banner(14)->backgroundImg) }})">
                        <div class="add_banner_item_text">
                            <h2>{{ banner(14)->offerText }}</h2>
                            <p>{{ banner(14)->description }}</p>
                            <a class="common_btn" href="{{ banner(14)->link }}">shop now <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="add_banner_item" style="background: url({{ asset(banner(15)->backgroundImg) }})">
                        <div class="add_banner_item_text">
                            <h2>{{ banner(15)->offerText }}</h2>
                            <p>{{ banner(15)->description }}</p>
                            <a class="common_btn" href="{{ banner(14)->link }}">shop now <span></span></a>
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
                        <h2>{{ sectionTitle(18)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 m-auto">
                    <div class="product_filter mb_25">
                        <button class=" active" data-filter="*">All Products</button>
                        @foreach ($topCategories as $category)
                        <button data-filter=".{{ $category->slug.$category->id }}">{{ $category->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach ($latestProduct as $product)
                <div class="col-xl-3 col-sm-6 col-lg-4 {{ $product->productcategories->slug.$product->productcategories->id }}">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset($product->thumbnail) }}" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal_{{ $product->id }}"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="{{ route('productDetails',$product->slug) }}"><i class="far fa-eye"></i></a></li>
                                <li><a class="{{ (wishlistHave($product->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a></li>
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
                            <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                            <p>${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del> </p>
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
        <div class="modal fade" id="cart_popup_modal_{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                                        <p><span>Quantity</span> (in {{ $product->unitType }}) :</p>
                                        <div class="button_area">
                                            <button class="decrement" type="button">-</button>
                                            <input type="text" value="{{ cartQti($product->id) }}" class="quantity" name="quantity">
                                            <button class="increment" type="button">+</button>
                                            <input value="{{ $product->selePrice }}" type="hidden" class="selePrice">
                                        </div>

                                        <h3>= $<span class="mathPrice">{{ $product->selePrice * cartQti($product->id)}}</span></h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <button type="submit" class="common_btn"><i class="far fa-shopping-basket"></i>
                                            Add To
                                            Cart
                                            <span></span></button>
                                        <a class="love {{ (wishlistHave($product->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span>{{ $product->productcategories->name }}</p>
                                    <ul class="share">
                                        <li>Share with friends:</li>
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
        POPULAR PRODUCTS END
    ==========================-->


    <!--=========================
        COUNTDOWN 3 START
    ==========================-->
    <section class="countdown_3 countdown mt_115 xs_mt_75 pt_115 xs_pt_75 pb_115 xs_pb_75"
        style="background: url({{ asset(deals(3)->backgroundImg) }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="countdown_text">
                        <div class="section_heading heading_left">
                            <h2>{{ deals(3)->offerText }}</h2>
                        </div>
                        <p>{{ deals(3)->description }}</p>
                        <div class="simply-countdown simply-countdown-three"></div>
                        <a class="common_btn" href="{{ deals(3)->link }}">shop now <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        COUNTDOWN 3 END
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
                        <h2>{{ sectionTitle(15)->heading }}</h2>
                    </div>
                    <div class="row testi_3_slider">
                        @forelse (testimonial() as $testimonial)
                        <div class="col-12">
                            <div class="testimonial_3_item">
                                <div class="img">
                                    <img src="{{ asset($testimonial->photo) }}" alt="testimonial" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <p class="rating">
                                        @php
                                        for ($i=0; $i < $testimonial->rating ; $i++) {
                                          echo'<i class="fas fa-star"></i>';
                                        }
                                        @endphp
                                    </p>
                                    <p class="review_text">{{ $testimonial->quote }}</p>
                                    <h3>{{ $testimonial->name }}</h3>
                                    <p class="designation">{{ $testimonial->designation }}</p>
                                </div>
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
    <!--=========================
        TESTIMONIAL 3 END
    ==========================-->


    <!--=========================
        VIDEO START
    ==========================-->
    <section class="video pt_115 xs_pt_75 pb_115 xs_pb_75" style="background: url({{ asset($backgroundVideo->backgroundImg) }}">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="video_content">
                        <div class="text">
                            <h3>{{ $backgroundVideo->heading }}</h3>
                            <p>{{ $backgroundVideo->description }}</p>
                            <a class="common_btn" href="{{ $backgroundVideo->link }}">shop now</a>
                        </div>
                        <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                            href="{{ $backgroundVideo->video }}">
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
                                <h4>{{ appSection()->shortTitle }}</h4>
                                <h2>{{ appSection()->offerText }}</h2>
                            </div>
                            <P>{{ appSection()->description }}</P>
                            <ul>
                                <li>
                                    <a class="common_btn" href="{{ appSection()->appleLink }}"><i class="fab fa-apple" aria-hidden="true"></i> Apple
                                        Store
                                        <span style="top: 198.062px; left: 161px;"></span></a>
                                </li>
                                <li>
                                    <a href="{{ appSection()->playLink }}"><i class="fab fa-google-play"></i>Play Store</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="download_2_img">
                            <img src="{{ asset(appSection()->image2) }}" alt="download" class="img-fluid w-100">
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
@push('scripts')
    <script>
        $(document).ready(function() {
    $('.button_area').each(function() {
        let $buttonArea = $(this);
        let $quantityInput = $buttonArea.find('.quantity');
        let $mathPrice = $buttonArea.next('h3').find('.mathPrice');
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

        // Initial update of price on page load
        updatePrice();

        // Optional: Update price if quantity input is manually changed
        $quantityInput.on('input', function() {
            updatePrice();
        });
    });
});

    </script>
@endpush
