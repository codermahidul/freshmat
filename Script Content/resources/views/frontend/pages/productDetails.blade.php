@extends('layouts.frontlayout')
@section('title',$productInfo->title)
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
                            <h1>{{ __('Product Details') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('shop') }}">{{ __('Shop') }}</a></li>
                                <li><a href="">{{ __('Product Details') }}</a></li>
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
        SHOP DETAILS START
    ==========================-->
    <section class="shop_details pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-8 col-lg-6 wow fadeInLeft">
                    <div class="product_zoom">
                        <div class="exzoom hidden" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class='exzoom_img_ul'>
                                    <li><img class="zoom ing-fluid w-100" src="{{ asset($productInfo->thumbnail) }}" alt="product">
                                    </li>
                                    @foreach ($productInfo->productgallery as $gallery)
                                    <li><img class="zoom ing-fluid w-100" src="{{ asset($gallery->photo) }}" alt="product">
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-10 col-lg-6 wow fadeInUp">
                    <div class="product_det_text">
                        <h2 class="details_title">{{ $productInfo->title }}</h2>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>{{ __('Review (20)') }}</span>
                        </p>
                        <p class="price">$<span id="selePrice">{{ $productInfo->selePrice }}</span> <del>{{ ($productInfo->regularPrice) ? '$' : '' }}{{ $productInfo->regularPrice }}</del></p>
                        <div class="details_short_description">
                            <h3>{{ __('Description') }}</h3>
                            <p>{{ $productInfo->shortDescription }}</p>
                        </div>
                        <form action="{{ route('addToCart') }}" method="post" id="addToCart">
                            @csrf
                        <div class="details_quentity_area">
                            <p><span>{{ __('Quantity') }}</span> (in {{ $productInfo->unitType }}) :</p>
                            <div class="button_area">
                                <button type="button" id="decrement">-</button>
                                <input type="text" placeholder="01" name="quantity" value="{{ cartQti($productInfo->id) }}" id="quantity">
                                <button type="button" id="increment">+</button>
                            </div>
                            <h3>= $<span id="mathPrice">{{ $productInfo->selePrice * cartQti($productInfo->id)}}</span></h3>
                        </div>
                        <div class="details_cart_btn">


                                <input type="hidden" name="productId" value="{{ $productInfo->id }}">

                            <button class="common_btn" href=""><i class="far fa-shopping-basket"></i> {{ __('Add To Cart') }}
                                <span></span></button>
                            </form>
                            <a class="love {{ (wishlistHave($productInfo->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist', $productInfo->id) }}"><i class="far fa-heart"></i></a>
                        </div>
                        <p class="category"><span>{{ __('Category') }}:</span> {{ $productInfo->productcategories->name }}</p>
                        <p class="sku"><span>{{ __('SKU') }}:</span> {{ $productInfo->sku }}</p>
                        <ul class="tags">
                            <li><a href="#">{{ $productInfo->tags }} </a></li>
                        </ul>
                        <ul class="share">
                            <li>{{ __('Share with friends') }}:</li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('productDetails', $productInfo->slug) }}&t={{ $productInfo->title }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/share?text={{ $productInfo->title }}&url={{ route('productDetails', $productInfo->slug) }}"><i class="fab fa-twitter" target="_blank"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('productDetails', $productInfo->slug) }}&title={{ $productInfo->title }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-none d-xl-block wow fadeInRight">
                    <div class="shop_details_banner">
                        <img src="{{ asset(banner(4)->backgroundImg) }}" alt="banner" class="img-fluid w-100">
                        <div class="text">
                            <h4>{{ banner(4)->shortTitle }}</h4>
                            <h3>{{ banner(4)->offerText }}</h3>
                            <a class="common_btn" href="{{ banner(4)->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt_120 xs_mt_80 wow fadeInUp">
                <div class="col-12">
                    <div class="shop_det_content_area">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">{{ __('Description') }}</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">{{ __('Reviews') }}</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="shop_det_description">
                                    {{ strip_tags($productInfo->description) }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="shop_det_review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2>({{ count($reviews) }}) {{ __('Reviews') }}</h2>
                                            @forelse ($reviews as $review)
                                            <div class="single_review">
                                                <div class="img">
                                                    <img src="{{ asset($review->user->userProfile->photo) }}" alt="Reviewer"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="text">
                                                    <h4>{{ $review->user->name }} <span>{{ $review->created_at->format('d-M-Y') }}</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>{{ $review->review }}</p>
                                                </div>
                                            </div>
                                            @empty
                                                {{ __('No review!') }}
                                            @endforelse
                                            {{-- Paginate --}}
                                            {{ $reviews->links('pagination.frontendPagination') }}
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="review_input_area">
                                                <h2>{{ __('Write A Review') }}</h2>
                                                <form action="{{ route('review',$productInfo->id) }}" method="POST">
                                                    @csrf
                                                <p>
                                                    {{ __('Select Your Rating') }} :
                                                    <span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <input type="hidden" name="rating" value="5">
                                                </p>
                                                    <div class="review_input_box">
                                                        <label>{{ __('Write Review') }} *</label>
                                                        <textarea rows="5" placeholder="Write your review" name="review"></textarea>
                                                        @error('review')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="common_btn">{{ __('Submit Review') }}
                                                        <span></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SHOP DETAILS END
    ==========================-->



    <!--=========================
        RELATED PRODUCT START
    ==========================-->
    <section class="related_product pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 wow fadeInLeft">
                    <div class="section_heading heading_left mb_15">
                        <h4>{{ __('Our Related Products') }}</h4>
                        <h2>{{ __('Related Products') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row related_slider">
                @forelse ($relatedProducts as $singleProduct)
                <div class="col-xl-3 wow fadeInUp">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset($singleProduct->thumbnail) }}" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="{{ route('productDetails',$singleProduct->slug) }}"><i class="far fa-eye"></i></a></li>
                                <li><a class="{{ (wishlistHave($singleProduct->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist',$singleProduct->id) }}"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="{{ route('productDetails',$singleProduct->slug) }}">{{ $singleProduct->title }}</a>
                            <p>${{ $singleProduct->selePrice }} <del>{{ ($singleProduct->regularPrice) ? '$' : '' }}{{ $singleProduct->regularPrice }}</del> </p>
                            <a class="cart_btn" href="{{ route('productDetails',$singleProduct->slug) }}" data-bs-toggle="modal"
                                data-bs-target="#cart_popup_modal{{ $singleProduct->id }}"><i class="far fa-shopping-basket"></i> {{ __('Add To Cart') }}
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @empty
                   <span class="text-center"> {{ __('No related product found!') }}</span>
                @endforelse
            </div>
        </div>
    </section>

    @foreach ($relatedProducts as $product)
    <form action="{{ route('addToCart') }}" method="post">
        @csrf
    <div class="cart_popup_modal">
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
                                            <span>{{ __('Review (20)') }}</span>
                                        </p>
                                        <p class="price">${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del></p>
                                        <div class="details_quentity_area">
                                            <p><span>{{ __('Quantity') }}</span> ({{ __('in') }} {{ $product->unitType }}) :</p>
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
                                                {{ __('Add To
                                                Cart') }}
                                                <span></span></button>
                                            <a class="love {{ (wishlistHave($product->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a>
                                        </div>
                                        <p class="category"><span>{{ __('Category') }}:</span>{{ $product->productcategories->name }}</p>
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
    </div>
        <input type="hidden" name="productId" value="{{ $product->id }}">
    </form>
    @endforeach
    <!--=========================
        RELATED PRODUCT END
    ==========================-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            //Increment
            $('#increment').on('click', function(){
                let value = parseInt($('#quantity').val(),10);
                value++
                let selePrice = parseInt($('#selePrice').text());
                let mathPrice = $('#mathPrice').text(selePrice*value);
                $('#quantity').val(value);
            })
            //Decrement
            $('#decrement').on('click', function(){
                let value = parseInt($('#quantity').val(),10);
                if (value > 1) {
                    value--
                    let selePrice = parseInt($('#selePrice').text());
                    let mathPrice = $('#mathPrice').text(selePrice*value);
                }
                $('#quantity').val(value);
            })
        })
    </script>
@endpush


{{-- Related Product --}}
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
