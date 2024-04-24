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
                                    @forelse ($cartItems as $cart)
                                    <tr>
                                        <td class="images">
                                            <img src="{{ asset($cart->product->thumbnail) }}" alt="cart" class="img-fluid w-100">
                                        </td>
                                        <td class="name">
                                            <a class="title" href="shop_details.html">{{ $cart->product->title }}</a>
                                        </td>
                                        <td class="price">
                                            <p>${{ $cart->product->selePrice }}</p>
                                        </td>
                                        <td class="qty">
                                            <div class="button_area">
                                                <button>-</button>
                                                <input type="text" placeholder="{{ $cart->quantity }}">
                                                <button>+</button>
                                            </div>
                                        </td>
                                        <td class="total">
                                            <span>$45.00</span>
                                        </td>
                                        <td class="delete">
                                            <a class="del" href="{{ route('removeCartItem',$cart->id) }}"><i class="fal fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        No Product Found!
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <form>
                            <input type="text" placeholder="Coupon Code">
                            <button type="submit" class="common_btn">Apply Coupon <span></span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>Total Cart (03)</h3>
                        <div class="cart_sidebar_info">
                            <h4>Subtotal : <span>$250.00</span></h4>
                            <p>Delivery : <span>$53.00</span></p>
                            <p>Discount : <span>$12.00</span></p>
                            <h5>Total : <span>$315.00</span></h5>
                            <a class="common_btn" href="#">Checkout <i class="fas fa-long-arrow-right"></i>
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