    <!--=========================
        SPECIAL PRODUCT START
    ==========================-->
    <section class="special_product pt_115 xs_pt_75">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25">
                        <h4>Special Products</h4>
                        <h2>Our Special Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach (banner(3) as $homeOneSpecialBanner)
                <div class="col-xxl-4 col-lg-3 col-xl-3">
                    <div class="special_product_banner wow fadeInLeft">
                        <img src="{{ asset($homeOneSpecialBanner->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h5>{{ $homeOneSpecialBanner->shortTitle }}</h5>
                            <h3>{{ $homeOneSpecialBanner->offerText }}</h3>
                            <p>{{ $homeOneSpecialBanner->description }}</p>
                            <a class="common_btn black_btn" href="{{ $homeOneSpecialBanner->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-xxl-8 col-lg-9 col-xl-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_1.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 70%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Butter garlic crab</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$10.00 <del>$12.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_2.jpg" alt="product" class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Bengal Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$13.00 <del>$15.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_3.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 40%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Three Carrot</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$17.00 <del>$20.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_4.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 50%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$29.00 <del>$32.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_5.jpg" alt="product" class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Orange Slice Mix</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$20.00 <del>$22.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="special_product_item wow fadeInUp">
                                <div class="special_product_img">
                                    <img src="{{asset('assets')}}/images/special_product_6.jpg" alt="product" class="img-fluid w-100">
                                    <span class="discount">save 30%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$16.00 <del>$18.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SPECIAL PRODUCT END
    ==========================-->