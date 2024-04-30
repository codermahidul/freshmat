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
                    <form class="checkout_form" action="{{ route('payment') }}" method="POST" id="paymentForm">
                        @csrf
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Name *</label>
                                    <input type="text" placeholder="Name" value="{{ Auth::user()->name }}" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Email *</label>
                                    <input type="email" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Phone</label>
                                    <input type="text" placeholder="Phone" value="{{ Auth::user()->userProfile->phone }}" name="phone">
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="Company Name" value="">
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-6">
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
                            </div> --}}
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Delivary Area *</label>
                                    <select class="select_2" name="charge" id="delivaryArea" onchange="charge()">
                                        <option value="0">Area</option>
                                        @foreach ($cities as $city)    
                                        <option value="{{ $city->charge }}">{{ $city->address }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>State *</label>
                                    <input type="text" placeholder="State *" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>Zip *</label>
                                    <input type="text" placeholder="Zip *" value="">
                                </div>
                            </div> --}}
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>City *</label>
                                        <input type="text" placeholder="Address *" value="{{ Auth::user()->userProfile->city }}" name="city">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>Address *</label>
                                        <input type="text" placeholder="Address *" value="{{ Auth::user()->userProfile->address }}" name="address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>Note</label>
                                    <textarea rows="5" placeholder="Note" name="note"></textarea>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>Total Cart ({{ cartTotal() }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>Subtotal : <span>${{ subTotal() }}</span></h4>
                            <p>Delivery : <span id="charge">0</span></p>
                            <p>Discount : <span>-${{ discount() }}</span></p>
                            <h5>Total : <span></span></h5>
                            <a class="common_btn" href="#" onclick="submit()">Payment <i class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function charge(){
            alert(1)
            var selectElement = document.getElementById("delivaryArea");
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            // Get the value of the selected option
            var selectedValue = selectedOption.value;
            document.getElementById("charge").innerText = "+$"+selectedValue;
        }

        function submit(){
           document.getElementById("paymentForm").submit();
        }
    </script>
    <!--=========================
        CHECKOUT END
    ==========================-->
@endsection