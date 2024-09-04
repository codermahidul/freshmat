@if ($specialProduct->count() > 0)

    <!--=========================
        SPECIAL PRODUCT START
    ==========================-->
    <section class="special_product pt_115 xs_pt_75">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25">
                        <h4>{{ sectionTitle(3)->subheading }}</h4>
                        <h2>{{ sectionTitle(3)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-lg-3 col-xl-3">
                    <div class="special_product_banner wow fadeInLeft">
                        <img src="{{ asset(banner(3)->backgroundImg) }}" alt="special product" class="img-fluid w-100">
                        <div class="text">
                            <h5>{{ banner(3)->shortTitle }}</h5>
                            <h3>{{ banner(3)->offerText }}</h3>
                            <p>{{ banner(3)->description }}</p>
                            <a class="common_btn black_btn" href="{{ banner(3)->link }}">{{ __('shop now') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-lg-9 col-xl-9">
                    <div class="row">
                        @forelse ($specialProduct as $item)
                            <div class="col-md-6">
                                <div class="special_product_item wow fadeInUp">
                                    <div class="special_product_img">
                                        <img src="{{ asset($item->product->thumbnail) }}" alt="product"
                                            class="img-fluid w-100">
                                        @if ($item->product->regularPrice)
                                        <span class="discount">save {{ round((($item->product->regularPrice - $item->product->selePrice)/$item->product->regularPrice)*100) }}%</span>
                                        @endif


                                    </div>
                                    <div class="special_product_text">
                                        <a class="title" href="{{ route('productDetails',$item->product->slug) }}">
                                            {{ $item->product->title }}</a>
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <p>${{ $item->product->selePrice }}<del>{{ $item->product->regularPrice ? '$' : '' }}{{ $item->product->regularPrice }}</del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{ __('No product to shown!') }}
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SPECIAL PRODUCT END
    ==========================-->

@endif
