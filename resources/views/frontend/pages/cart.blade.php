@extends('layouts.frontlayout')
@section('title', 'Cart')
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
                            <h1>{{ __('Cart View') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('shop') }}">{{ __('Shop') }}</a></li>
                                <li><a href="">{{ __('Cart') }}</a></li>
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
            CART VIEW START
        ==========================-->
    <section class="cart_view pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="cart_table_area">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="images">{{ __('Image') }}</th>
                                        <th class="name">{{ __('Product Name') }}</th>
                                        <th class="price">{{ __('Price') }}</th>
                                        <th class="qty">{{ __('Quantity') }}</th>
                                        <th class="total">{{ __('Total') }}</th>
                                        <th class="delete">{{ __('Delete') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Session::has('cart'))
                                    @foreach (Session::get('cart') as $index => $cart)
                                    <tr>
                                        <td class="images">
                                            <img src="{{ asset($cart['thumbnail']) }}" alt="cart" class="img-fluid w-100">
                                        </td>
                                        <td class="name">
                                            <a class="title" href="{{ route('productDetails', productSlug($cart['productId'])) }}">{{ $cart['title'] }}</a>
                                        </td>
                                        <td class="price">
                                            <p>${{ $cart['price'] }}</p>
                                            <input type="hidden" value="{{ $cart['price'] }}" class="selePrice">
                                        </td>
                                        <td class="qty">
                                            <div class="button_area">
                                                <button type="button" class="decrement">-</button>
                                                <input type="text" class="quantity" value="{{ $cart['quantity'] }}">
                                                <button type="button" class="increment">+</button>
                                            </div>
                                        </td>
                                        <td class="total">
                                            $<span class="mathPrice">{{ $cart['price'] * $cart['quantity'] }}</span>
                                        </td>
                                        <td class="delete">
                                            <a class="del" href="{{ route('removeCartItem', $cart['productId']) }}"><i class="fal fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @else
                                        <tr>
                                            <td colspan="8">{{ __('No cart item found!') }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        @if (Session::has('cart'))
                            <form action="{{ route('couponClaim') }}" method="POST">
                                @csrf
                                <input type="text" placeholder="Coupon Code" name="coupon" value="{{ old('coupon') }}">
                                <button type="submit" class="common_btn">{{ __('Apply Coupon') }} <span></span></button>
                                @error('coupon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                @if (session('nofound'))
                                    <span class="text-danger">{{ session('nofound') }}</span>
                                @endif
                                @if (session('success'))
                                    <span class="text-success">{{ session('success') }}</span>
                                @endif
                            </form>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>Total Cart ({{ cartTotal() }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>{{ __('Subtotal') }} : <span>$ <span id="subtotal">{{ subTotal() }}</span></span></h4>
                            @if (Session::has('coupon'))
                                <p>{{ __('Discount') }} : {{ Session::get('coupon')['couponName'] }}
                                    <span>$
                                        <span id="discount">{{ discount() }}</span>
                                    </span>
                                </p>
                            @endif
                            <h5>{{ __('Total') }} : <span>$ <span
                                        id="total">{{ subTotal() - (Session::has('coupon') ? discount() : 0) }}</span></span>
                            </h5>
                            @if (session('couponName'))
                                <?php $coupon = session('couponName'); ?>
                            @else
                                <?php $coupon = null; ?>
                            @endif
                            <a class="common_btn" href="{{ route('checkout', $coupon) }}">{{ __('Checkout') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
            CART VIEW END
        ==========================-->
@endsection


@push('scripts')
<script>
    $(document).ready(function(){
        //Increment
        $('.increment').on('click', function(){
            let $row = $(this).closest('tr');
            let quantityInput = $row.find('.quantity');
            let selePrice = parseFloat($row.find('.selePrice').val());
            let quantity = parseInt(quantityInput.val(), 10);
            let productId = $row.find('.del').attr('href').split('/').pop(); // Assuming productId is the last part of the URL

            quantity++;
            quantityInput.val(quantity);

            let total = selePrice * quantity;
            $row.find('.mathPrice').text(total.toFixed(2));

            // Send AJAX request to update quantity
            $.ajax({
                url: "{{ route('addToCart') }}",  // Replace with your actual route
                method: "POST",
                data: {
                    productId: productId,
                    quantity: quantity
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        //Decrement
        $('.decrement').on('click', function(){
            let $row = $(this).closest('tr');
            let quantityInput = $row.find('.quantity');
            let selePrice = parseFloat($row.find('.selePrice').val());
            let quantity = parseInt(quantityInput.val(), 10);
            let productId = $row.find('.del').attr('href').split('/').pop(); // Assuming productId is the last part of the URL

            if (quantity > 1) {
                quantity--;
                quantityInput.val(quantity);

                let total = selePrice * quantity;
                $row.find('.mathPrice').text(total.toFixed(2));

                // Send AJAX request to update quantity
                $.ajax({
                    url: "{{ route('addToCart') }}",  // Replace with your actual route
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        productId: productId,
                        quantity: quantity
                    },
                    success: function(response) {
                        window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
        });
    });
</script>
@endpush
