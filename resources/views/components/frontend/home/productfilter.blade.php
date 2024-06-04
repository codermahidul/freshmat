    <!--=========================
        FRESH PRODUCTS START
    ==========================-->
    <section class="fresh_products pt_115 xs_pt_75">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_35">
                        <h4>{{ sectionTitle(1)->subheading }}</h4>
                        <h2>{{ sectionTitle(1)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-xl-6 m-auto">
                    <div class="product_filter mb_25">
                        <button class=" active" data-filter="*">All Products</button>
                        @foreach ($topCategories as $topcategory)     
                        <button data-filter=".{{ $topcategory->slug.$topcategory->id }}">{{ $topcategory->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row grid">
                @forelse ($latestProduct as $product)
                <div class="col-xl-3 col-sm-6 col-lg-4 {{ $product->productcategories->slug.$product->productcategories->id }}">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset($product->thumbnail)}}" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="{{ route('productDetails',$product->slug) }}">{{ $product->title }}</a>
                            <p>${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del> </p>
                            <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                data-bs-target="#cart_popup_modal{{ $product->id }}"><i class="far fa-shopping-basket"></i> Add To
                                Cart
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @empty
                    No Product Found!
                @endforelse

                {{-- <div class="col-xl-3 col-sm-6 col-lg-4 vegetables root">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_2.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="product_details.html">Fresh Red Seedless</a>
                            <p>$12.00 <del>$10.00</del> </p>
                            <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                data-bs-target="#cart_popup_modal"><i class="far fa-shopping-basket"></i> Add To
                                Cart
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits nuts drinks">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_3.jpg" alt="Product" class="img_fluid w-100">
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
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables drinks root">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_4.jpg" alt="Product" class="img_fluid w-100">
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
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits root">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_5.jpg" alt="Product" class="img_fluid w-100">
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
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables nuts">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_6.jpg" alt="Product" class="img_fluid w-100">
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
                <div class="col-xl-3 col-sm-6 col-lg-4 fruits nuts root">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_7.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="shop_details.html">Beef Butter Cake</a>
                            <p>$30.00 <del>$34.00</del> </p>
                            <a class="cart_btn" href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                    class="far fa-shopping-basket"></i> Add To
                                Cart
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 vegetables drinks">
                    <div class="single_product wow fadeInUp">
                        <div class="single_product_img">
                            <img src="{{asset('assets')}}/images/product_img_8.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="shop_details.html">Fresh Mango Fruits</a>
                            <p>$22.00 <del>$26.00</del> </p>
                            <a class="cart_btn" href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                    class="far fa-shopping-basket"></i> Add To
                                Cart
                                <span></span></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
    @foreach ($latestProduct as $product)
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
                                    <p class="price">${{ $product->selePrice }} <del>{{ ($product->regularPrice) ? '$' : '' }}{{ $product->regularPrice }}</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti</span> (in {{ $product->unitType }}) :</p>
                                        <div class="button_area">
                                            <button onclick="decrement()" class="disabled">-</button>
                                            <input type="text" value="1" id="quantity" name="quantity">
                                            <button id="increment" class="disabled" onclick="increment()">+</button>
                                            {{-- <script>
                                                var quantityInput = document.getElementById('quantity');
                                                function decrement() {
                                                    var value = parseInt(quantityInput.value);
                                                    if (value > 1) {
                                                        quantityInput.value = value - 1;
                                                    }
                                                }
                                        
                                                function increment() {
                                                    var value = parseInt(quantityInput.value);
                                                    quantityInput.value = value + 1;
                                                }
                                            </script> --}}
                                        </div>
                                        <h3>= ${{ $product->selePrice }}</h3>
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
        FRESH PRODUCTS END
    ==========================-->