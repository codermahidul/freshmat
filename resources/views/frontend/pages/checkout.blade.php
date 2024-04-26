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
                            <h1>Checkout</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="">Checkout</a></li>
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
        CHECKOUT START
    ==========================-->
    <section class="checkout pt_120 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp">
                    <form class="checkout_form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Email *</label>
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Phone</label>
                                    <input type="email" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Country *</label>
                                    <select class="select_2" name="state">
                                        <option value="AL">Country</option>
                                        <option value="">Japan</option>
                                        <option value="">Korea</option>
                                        <option value="">Singapore</option>
                                        <option value="">Thailand</option>
                                        <option value="">Kanada</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>City *</label>
                                    <select class="select_2" name="state">
                                        <option value="AL">City</option>
                                        <option value="">dhaka</option>
                                        <option value="">barisal</option>
                                        <option value="">khulna</option>
                                        <option value="">rajshahi</option>
                                        <option value="">bogura</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>State *</label>
                                    <input type="text" placeholder="State *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Zip *</label>
                                    <input type="text" placeholder="Zip *">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>Address *</label>
                                    <input type="text" placeholder="Address *">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>Note</label>
                                    <textarea rows="5" placeholder="Note"></textarea>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>Total Cart ({{ cartTotal(Auth::id()) }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>Subtotal : <span>${{ cartTotalPrice(Auth::id()) }}</span></h4>
                            <p>Delivery : <span>${{ 50 }}</span></p>
                            <p>Discount : <span>${{ $discount }}</span></p>
                            <h5>Total : <span>${{ cartTotalPrice(Auth::id()) - $discount - 50 }}</span></h5>
                            <a class="common_btn" href="#">Payment <i class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        CHECKOUT END
    ==========================-->
@endsection