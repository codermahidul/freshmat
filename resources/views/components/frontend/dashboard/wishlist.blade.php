<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <h2 class="dashboard_title">{{ __('Wishlist') }}</h2>
        <div class="dashboard_wishlist">
            <div class="row">
                @forelse ($wishlists as $wishlist)
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="single_product">
                        <div class="single_product_img">
                            <img src="{{ asset($wishlist->products->thumbnail) }}" alt="Product" class="img_fluid w-100">
                        </div>
                        <div class="single_product_text">
                            <a class="title" href="{{ route('productDetails',$wishlist->products->slug) }}">{{ $wishlist->products->title }}</a>
                            <p>${{ $wishlist->products->selePrice }} <del>{{ ($wishlist->products->regularPrice) ? '$' : '' }}{{ $wishlist->products->regularPrice }}</del> </p>
                            <a class="cart_btn" href="shop_details.html" data-bs-toggle="modal"
                                data-bs-target="#cart_popup_modal{{ $wishlist->id }}"><i
                                    class="far fa-shopping-basket"></i> {{ __('Add To Cart') }}
                                <span></span></a>
                                <a class="cart_btn" href="{{ route('adToWishlist',$wishlist->products->id) }}"><i
                                    class="far fa-shopping-basket"></i> {{ __('Remove') }}
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @empty
                    <span>{{ __('Empty!') }}</span>
                @endforelse
            </div>
        </div>
    </div>
</div>
