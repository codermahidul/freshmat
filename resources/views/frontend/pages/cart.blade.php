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
                            <h1>Cart View</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="">Cart</a></li>
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
                                        <th class="images">Image</th>
                                        <th class="name">Product Name</th>
                                        <th class="price">Price</th>
                                        <th class="qty">Quantity</th>
                                        <th class="total">Total</th>
                                        <th class="delete">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Session::has('cart'))
                                    @php 
                                        $subtotal = 0;
                                    @endphp
                                    @foreach (Session::get('cart') as $cart)
                                    <tr>
                                        <td class="images">
                                            <img src="{{ asset($cart['thumbnail']) }}" alt="cart" class="img-fluid w-100">
                                        </td>
                                        <td class="name">
                                            <a class="title" href="shop_details.html">{{ $cart['title'] }}</a>
                                        </td>
                                        <td class="price">
                                            <p>${{ $cart['price'] }}</p>
                                        </td>
                                        <td class="qty">
                                            <div class="button_area">
                                                <button>-</button>
                                                <input type="text" placeholder="{{ $cart['quantity'] }}">
                                                <button>+</button>
                                            </div>
                                        </td>
                                        <td class="total">
                                            <span>${{ $cart['price']*$cart['quantity'] }}</span>
                                        </td>
                                        <td class="delete">
                                            <a class="del" href="{{ route('removeCartItem',$cart['productId']) }}"><i class="fal fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                    @php 
                                        $subtotal += $cart['price']*$cart['quantity'];
                                    @endphp
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">No cart item found!</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        @if(Session::has('cart'))
                        <form action="{{ route('couponClaim') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Coupon Code" name="coupon" value="{{ old('coupon') }}">
                            <button type="submit" class="common_btn">Apply Coupon <span></span></button>
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
                        <h3>Total Cart ({{ (Session::has('cart')) ? count(Session::get('cart')) : '0' }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>Subtotal : <span>$ <span id="subtotal">{{ (Session::has('cart') ? $subtotal : 0) }}</span></span></h4>
                            <p>Delivery : <span>$ <span id="delivery">50</span></span></p>
                            @if (Session::has('coupon'))
                                <p>Discount : {{ Session::get('coupon')['couponName'] }} 
                                    <span>$ 
                                        <span id="discount">{{ Session::get('coupon')['discountAmmount'] }}</span>
                                    </span>
                                </p>
                            @endif
                            <h5>Total : <span>$ <span id="total">{{ (Session::has('cart') ? $subtotal : 0) - (Session::has('coupon') ? Session::get('coupon')['discountAmmount'] : 0) }}</span></span></h5>
                            @if (session('couponName'))
                                <?php $coupon = session('couponName') ?>
                            @else
                            <?php $coupon = null; ?>
                            @endif
                            <a class="common_btn" href="{{ route('checkout',$coupon) }}">Checkout <i class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                        {{-- <script>
                            var subtotal = Number(document.getElementById('subtotal').innerText);
                            var delivery = Number(document.getElementById('delivery').innerText);
                            var discountElement = document.getElementById('discount');
                            var total = subtotal+delivery;
                            if (discountElement) {
                                var discount = Number(discountElement.innerText);
                                var total = total-discount;
                            }
                            document.getElementById('total').innerText = total;
                        </script> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        CART VIEW END
    ==========================-->
@endsection