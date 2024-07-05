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
                            <form action="{{ route('shop') }}" method="GET">
                                <input type="text" placeholder="Search..." name="search">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp">
                        <div class="shop_page_header">
                            <p>Showing 1–6 of 10 results</p>
                            <div class="filter">
                                <p>Sort by:</p>
                                <form action="{{ route('shop') }}" method="GET">
                                <select class="select_js" onchange="this.form.submit()" name="sort">
                                    <option value=""> Default Sorting</option>
                                    <option value="lh">low to high</option>
                                    <option value="hl">high to low</option>
                                    {{-- <option value="br">Best rating</option> --}}
                                    <option value="bs">best sell</option>
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
                            <h3>Featured Products</h3>
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
                            No Products found!
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
                                    <p class="price">$ <span class="selePrice">{{ $product->selePrice }}</span> <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti</span> (in {{ $product->unitType }}) :</p>
                                        <div class="button_area">
                                            <button type="button" class="decrement">-</button>
                                            <input type="text" value="{{ cartQti($product->id) }}" class="quantity" name="quantity">
                                            <button type="button" class="increment">+</button>
                                        </div>
                                        <h3>= $ <span class="mathPrice">{{ $product->selePrice * cartQti($product->id) }}</span></h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <button type="submit" class="common_btn"><i class="far fa-shopping-basket"></i>
                                            Add To
                                            Cart
                                            <span></span></button>
                                        <a class="love" href="{{ route('adToWishlist',$product->id) }}"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span>{{ $product->productcategories->name }}</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">{{ $product->tags }}</a></li>
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
        <input type="hidden" name="productId" value="{{ $product->id }}">
    </form>
    @endforeach
    <!--=========================
        SHOP PAGE END
    ==========================-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){

            //increment
            $('.increment').on('click',function(){
                let $quantity = $(this).siblings('.quantity');
                //let selePrice = parseInt($(this).siblings('.selePrice'));
                //let mathPrice = $(this).siblings('.mathPrice');
                alert(mathPrice);
                let value = parseInt($quantity.val(),10);
                value++
                $('.quantity').val(value);
            });

            //decrement
            $('.decrement').on('click', function(){
                let $quantity = $(this).siblings('.quantity');

                let value = parseInt($quantity.val(),10);
                if (value > 1) {
                    value--
                }
                $quantity.val(value);
            });


        });
    </script>
@endpush
