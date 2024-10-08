@extends('layouts.frontlayout')
@section('title', 'Checkout')
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
                            <h1>{{ __('Checkout') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('shop') }}">{{ __('Shop') }}</a></li>
                                <li><a href="">{{ __('Checkout') }}</a></li>
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
                        <h3>{{ __('Billing Details') }}</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>{{ __('Name') }} *</label>
                                    <input type="text" placeholder="Name" value="{{ Auth::user()->name }}"
                                        name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>{{ __('Email') }} *</label>
                                    <input type="email" placeholder="Email" value="{{ Auth::user()->email }}"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>{{ __('Phone') }}</label>
                                    <input type="text" placeholder="Phone" value="{{ Auth::user()->userProfile->phone }}"
                                        name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout_input_box">
                                    <label>{{ __('Delivary Area') }} *</label>
                                    <select class="select_2" name="charge" id="delivaryArea" onchange="onChange()">
                                        <option value="0">{{ __('Area') }}</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->charge }}">{{ $city->address }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>{{ __('City') }} *</label>
                                    <input type="text" placeholder="Address *"
                                        value="{{ Auth::user()->userProfile->city }}" name="city">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>{{ __('Address') }} *</label>
                                    <input type="text" placeholder="Address *"
                                        value="{{ Auth::user()->userProfile->address }}" name="address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="checkout_input_box">
                                    <label>{{ __('Note') }}</label>
                                    <textarea rows="5" placeholder="Note" name="note"></textarea>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>{{ __('Total Cart') }} ({{ cartTotal() }})</h3>
                        <div class="cart_sidebar_info">
                            <h4>{{ __('Subtotal') }} : <span id="subTotlaLast">${{ subTotal() }}</span></h4>
                            <p>{{ __('Delivery') }} : <span id="charge">0</span></p>
                            @if (discount() != null)
                                <p>{{ __('Discount') }} : <span id="discountLast">-${{ discount() }}</span></p>
                            @endif
                            <h5>{{ __('Total') }} : <span id="lastTotal">$100</span></h5>
                            <a class="common_btn" href="#" onclick="submit()">{{ __('Payment') }} <i
                                    class="fas fa-long-arrow-right"></i>
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

@push('scripts')
    <script>
        function onChange() {
            var selectElement = document.getElementById("delivaryArea");
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var selectedValue = parseFloat(selectedOption.value);

            document.getElementById("charge").innerText = "+$" + selectedValue.toFixed(2);
            updateTotal();
        }

        function updateTotal() {
            let sutotalString = $('#subTotlaLast').text();
            let subTotlaLast = parseFloat(sutotalString.replace('$', ''));
            let chargString = $('#charge').text();
            let charge = parseFloat(chargString.replace('+$', ''));
            let discountString = $('#discountLast').text();
            let discountLast = discountString ? parseFloat(discountString.replace('-$', '')) : 0;
            let total = (subTotlaLast + charge) - discountLast;
            $('#lastTotal').text('$' + total.toFixed(2));
        }

        function submit() {
            document.getElementById("paymentForm").submit();
        }

        $(document).ready(function() {
            updateTotal();
        });
    </script>
@endpush

