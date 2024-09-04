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
                            <h1>{{ __('Shop') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="">{{ __('Shop') }}</a></li>
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
                            <form action="{{ route('shop') }}" method="GET">
                                <input type="text" placeholder="Search..." name="search">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp">
                        <div class="shop_page_header">
                            <p>{{ __('Showing') }} {{ ($products->currentPage() - 1)*$products->perPage()+1 }}–{{ min($products->currentPage() * $products->perPage(),$products->total()) }} {{ __('of') }} {{ $products->total() }} {{ __('results') }}</p>
                            <div class="filter">
                                <p>{{ __('Sort by') }}:</p>
                                <form action="{{ route('shop') }}" method="GET">
                                <select class="select_js" onchange="this.form.submit()" name="sort">
                                    <option {{ ($selected == '') ? 'selected' : ''  }} value=""> {{ __('Default Sorting') }}</option>
                                    <option {{ ($selected == 'lh') ? 'selected' : ''  }} value="lh">{{ __('low to high') }}</option>
                                    <option {{ ($selected == 'hl') ? 'selected' : ''  }} value="hl">{{ __('high to low') }}</option>
                                    {{-- <option value="br">Best rating</option> --}}
                                    <option {{ ($selected == 'bs') ? 'selected' : ''  }} value="bs">{{ __('best sell') }}</option>
                                </select>
                            </form>
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
                        {{-- sidebar categories --}}
                        @include('components.frontend.global.sidebarcategories')
                        <div class="shop_sidebar_product">
                            <h3>{{ __('Featured Products') }}</h3>
                            <ul>
                                @foreach ($featuredProducts as $item)
                                <li>
                                    <div class="img">
                                        <img src="{{ asset($item->product->thumbnail) }}" alt="product" class="img-fluid w-100">
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('productDetails',$item->product->slug) }}">{{ $item->product->title }}</a>
                                        <p>${{ $item->product->selePrice }}</p>
                                        <span>
                                            {{ $item->rating }}
                                          @for ($i = 0; $i > $item->rating ; $i++)
                                            {{ '<i class="fas fa-star"></i>' }}
                                          @endfor
                                            {{-- <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i> --}}
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-lg-2 col-lg-8 xs_mb_50 shop_mb_margin">
                    <div class="row">
                        @forelse ($products as $product)
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="single_product">
                                <div class="single_product_img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="Product" class="img_fluid w-100">
                                    <ul>
                                        <li><a href="{{ route('productDetails',$product->slug) }}"><i class="far fa-eye"></i></a></li>
                                        <li><a class="{{ (wishlistHave($product->id) == 1) ? 'have' : '' }}" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                                    <p>${{ $product->selePrice }} <del>{{ ($product->regularPrice == '') ? '' : '$' }}{{ $product->regularPrice }}</del> </p>
                                    <a class="cart_btn" href="{{ route('productDetails',$product->slug) }}" data-bs-toggle="modal"
                                        data-bs-target="#cart_popup_modal{{ $product->id }}"><i class="far fa-shopping-basket"></i> {{ __('Add To
                                        Cart') }}
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        @empty
                            {{ __('No Products found!') }}
                        @endforelse
                    </div>
                    {{-- Pagination --}}
                    {{ $products->links('pagination.frontendPagination') }}
                </div>
            </div>
        </div>
    </section>

    @foreach ($products as $product)
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
                                            <p><span>{{ __('Quantity') }}</span> (in {{ $product->unitType }}) :</p>
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
        SHOP PAGE END
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
