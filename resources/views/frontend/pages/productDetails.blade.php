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
                            <h1>Product Details</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="">Product Details</a></li>
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
                            <span>Review (20)</span>
                        </p>
                        <p class="price">${{ $productInfo->selePrice }} <del>{{ ($productInfo->regularPrice) ? '$' : '' }}{{ $productInfo->regularPrice }}</del></p>
                        <div class="details_short_description">
                            <h3>Description</h3>
                            <p>{{ $productInfo->shortDescription }}</p>
                        </div>
                        <form action="{{ route('addToCart') }}" method="post" id="addToCart">
                            @csrf
                        <div class="details_quentity_area">
                            <p><span>Qti</span> (in {{ $productInfo->unitType }}) :</p>
                            <div class="button_area">
                                <button>-</button>
                                <input type="text" placeholder="01" name="quantity" value="1">
                                <button>+</button>
                            </div>
                            <h3>= $10.50</h3>
                        </div>
                        <div class="details_cart_btn">
                            
                                
                                <input type="hidden" name="productId" value="{{ $productInfo->id }}">
                            
                            <button class="common_btn" href=""><i class="far fa-shopping-basket"></i> Add To Cart
                                <span></span></button>
                            </form>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                        </div>
                        <p class="category"><span>Category:</span> {{ $productInfo->productcategories->name }}</p>
                        <p class="sku"><span>SKU:</span> {{ $productInfo->sku }}</p>
                        <ul class="tags">
                            <li>Tags:</li>
                            <li><a href="#">{{ $productInfo->tags }} </a></li>
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
                                    aria-selected="true">Description</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"> Information</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Reviews</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="shop_det_description">
                                    {{ strip_tags($productInfo->description) }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="shop_det_additional_info">
                                    <h3>Additional Information</h3>
                                    <div class="table-responsive">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>2 kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Dimensions</td>
                                                    <td>10 × 6 × 3 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Width</td>
                                                    <td>7.5” - 8.75”</td>
                                                </tr>
                                                <tr>
                                                    <td>Hight</td>
                                                    <td>5.5” - 6.75”</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="shop_det_review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2>(15) Reviews</h2>
                                            <div class="single_review">
                                                <div class="img">
                                                    <img src="images/testimonial_img_1.jpg" alt="Reviewer"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="text">
                                                    <h4>Hasnat Abdullah <span>May 8, 2023</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free text used by copytyping refreshing.
                                                        Neque
                                                        porro est is a rem ipsum qu
                                                        ia qued inventore veritatis et quasi architecto beatae</p>
                                                </div>
                                            </div>
                                            <div class="single_review">
                                                <div class="img">
                                                    <img src="images/testimonial_img_2.jpg" alt="Reviewer"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="text">
                                                    <h4>Sinthis Mou <span>May 8, 2023</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free text used by copytyping refreshing.
                                                        Neque
                                                        porro est is a rem ipsum qu
                                                        ia qued inventore veritatis et quasi architecto beatae</p>
                                                </div>
                                            </div>
                                            <div class="single_review">
                                                <div class="img">
                                                    <img src="images/testimonial_img_3.jpg" alt="Reviewer"
                                                        class="img-fluid w-100">
                                                </div>
                                                <div class="text">
                                                    <h4>Samira Khanom <span>May 8, 2023</span></h4>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <p>Lorem ipsum is simply free text used by copytyping refreshing.
                                                        Neque
                                                        porro est is a rem ipsum qu
                                                        ia qued inventore veritatis et quasi architecto beatae</p>
                                                </div>
                                            </div>
                                            <div class="pagination mt_25">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="far fa-angle-double-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link active" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="far fa-angle-double-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="review_input_area">
                                                <h2>Write A Review</h2>
                                                <p>
                                                    Select Your Rating :
                                                    <span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                </p>
                                                <form>
                                                    <div class="review_input_box">
                                                        <label>Name *</label>
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="review_input_box">
                                                        <label>Email *</label>
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="review_input_box">
                                                        <label>Write Review *</label>
                                                        <textarea rows="5" placeholder="Write your review"></textarea>
                                                    </div>
                                                    <button type="submit" class="common_btn">Submit Review
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
                        <h4>Our Related Products</h4>
                        <h2>Related Products</h2>
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
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="{{ route('productDetails',$singleProduct->slug) }}">{{ $singleProduct->title }}</a>
                            <p>${{ $singleProduct->selePrice }} <del>{{ ($singleProduct->regularPrice) ? '$' : '' }}{{ $singleProduct->regularPrice }}</del> </p>
                            <a class="cart_btn" href="{{ route('productDetails',$singleProduct->slug) }}" data-bs-toggle="modal"
                                data-bs-target="#cart_popup_modal{{ $singleProduct->id }}"><i class="far fa-shopping-basket"></i> Add To Cart
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @empty
                   <span class="text-center"> No related product found!</span>
                @endforelse
            </div>
        </div>
    </section>

    @foreach ($relatedProducts as $singleProduct)
    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal{{ $singleProduct->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="cart_popup_modal_img">
                                    <img src="{{ asset($singleProduct->thumbnail) }}" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="product_det_text">
                                    <h2 class="details_title"></h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">${{ $singleProduct->selePrice }} <del>{{ ($singleProduct->regularPrice) ? '$' : '' }}{{ $singleProduct->regularPrice }}</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti</span> (in {{ $singleProduct->unitType }}) :</p>
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
                                        <a class="love" href="{{ route('adToWishlist',$singleProduct->id) }}"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span> {{ $singleProduct->productcategories->name }}</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">{{ $singleProduct->tags }} </a></li>
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
    <!--=========================
        RELATED PRODUCT END
    ==========================-->
@endsection