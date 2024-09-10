@extends('layouts.frontlayout')
@section('title','Checkout')
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
                            <h1>{{ __('Payment') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i>{{ __('Home') }}</a></li>
                                <li><a href="">{{ __('Payment') }}</a></li>
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
    <!--============================
        PAYMENT START
    ==============================-->
    <section class="payment pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 wow fadeInLeft">
                    <div class="payment_holder">
                        <div class="row">
                            @if ($paypal->status == 'enable')
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="{{ route('paypal.payment') }}">
                                    <img src="{{ asset($paypal->image) }}" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif

                            @if ($stripe->status == 'enable')
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="{{ route('stirpe.payment') }}">
                                    <img src="{{ asset($stripe->image) }}" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif

                            @if ($mollie->status == 'enable')
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="{{ route('mollie.payment') }}">
                                    <img src="{{ asset($mollie->image) }}" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            @endif
                            <div class="col-xl-3 col-6 col-sm-4">
                                {{-- <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-4.jpg" alt="payment" class="img-fluid w-100">
                                </a> --}}
                                <form action="{{ route('razorpay.payment') }}" method="post">
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ config('razorpay.key') }}"
                                        data-amount="{{ 40*100 }}"
                                        data-buttontext="Pay Amount"
                                        data-name="Test User"
                                        data-description=""
                                        data-prefill.name="User"
                                        data-prefill.email="user@gmail.com"
                                        data-theme.color="#ff7529">
                                    </script>
                                </form>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="{{ route('instamojo.payment') }}">
                                    <img src="{{ asset('assets') }}/images/payment-5.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-6.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-1.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-2.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-3.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-4.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-5.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-xl-3 col-6 col-sm-4">
                                <a class="single_payment" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <img src="{{ asset('assets') }}/images/payment-6.jpg" alt="payment" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar mt_25">
                        <h3>{{ __('Total Cart') }} ({{ cartTotal() }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>{{ __('Subtotal') }} : <span>${{ subTotal() }}</span></h4>
                            <p>{{ __('Delivery') }} : <span>${{ $deliveryCharge }}</span></p>
                            <p>{{ __('Discount') }} : <span>-${{ discount() }}</span></p>
                            <h5>{{ __('Total') }} : <span>${{ payTotal() }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do isus modsels is
                            mpor incididunt ut labore et dolore magna aliqua. Ut en nim ad minim on there
                            There are many variations of passages of Lorem Ipsum available, but the major
                            adipiscing elit veniam.</p>

                        <ul class="modal_iteam">
                            <li>One popular belief, Lorem Ipsum is not simply random.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>To popular belief, Lorem Ipsum is not simply random.</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random.</li>
                        </ul>

                        <form class="modal_form">
                            <div class="checkout_input_box">
                                <label>Enter Something</label>
                                <input type="text" placeholder="Enter Something">
                            </div>
                            <div class="checkout_input_box">
                                <label>select Something</label>
                                <select class="select_js">
                                    <option value="">Select Something</option>
                                    <option value="">Something 1</option>
                                    <option value="">Something 2</option>
                                    <option value="">Something 3</option>
                                    <option value="">Something 4</option>
                                </select>
                            </div>
                            <div class="checkout_input_box">
                                <label>Enter Something</label>
                                <textarea rows="3" placeholder="Enter Something"></textarea>
                            </div>
                        </form>

                        <div class="modal-footer">
                            <button type="button" class="modal_closs_btn" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="common_btn">submit <span></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--============================
        PAYMENT END
    ==============================-->
@endsection
