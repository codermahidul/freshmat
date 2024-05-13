@extends('layouts.frontlayout')
@section('title','About Us')
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
                            <h1>About Us</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">About Us</a></li>
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
        ABOUT PAGE  START
    ==========================-->
    <section class="about pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-8 col-lg-6 wow fadeInLeft">
                    <div class="about_img">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/about_img.jpg" alt="about" class="img-fluid w-100">
                        </div>
                        <p>“There are many variations its of passages of Lorem Ipsum nsi available, but the majority
                            they suffered” <span>Robart Day</span></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight">
                    <div class="about_text">
                        <div class="section_heading heading_left mb_20">
                            <h4>About Us</h4>
                            <h2>Welcome To Organic Agriculture Grocery Shop</h2>
                        </div>
                        <!-- <h5>We connect buyers and sellers of natural, organic products who are so beguiled demoralized
                            charms of pleasure.</h5> -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or mori words which slightly
                            believable.</p>
                        <ul>
                            <li>
                                <span>01</span>
                                <h4> Organic products who are so</h4>
                            </li>
                            <li>
                                <span>02</span>
                                <h4>Healthy food everyday</h4>
                            </li>
                            <li>
                                <span>03</span>
                                <h4>Local growth of fresh food</h4>
                            </li>
                            <li>
                                <span>04</span>
                                <h4>Demoralized charms of pleasure</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_choose mt_120 xs_mt_80 pt_115 xs_pt_75 pb_120 xs_pb_80"
        style="background: url({{ asset('assets') }}/images/why_choose_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>Our Features</h4>
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset('assets') }}/images/why_choose_icon_1.png" alt="why choose" class="img-fluid w-100">
                            </span>
                            All Kind Brand
                        </h2>
                        <p>There are many variations of passages of any Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or mori words....</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset('assets') }}/images/why_choose_icon_2.png" alt="why choose" class="img-fluid w-100">
                            </span>
                            Pesticide Free Goods
                        </h2>
                        <p>There are many variations of passages of any Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or mori words....</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset('assets') }}/images/why_choose_icon_3.png" alt="why choose" class="img-fluid w-100">
                            </span>
                            Curated Products
                        </h2>
                        <p>There are many variations of passages of any Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or mori words....</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work_process pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>How We Works</h4>
                        <h2>Our Working Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number">01</span>
                        <h3>Choose The Item</h3>
                        <p>There are many variations of Lorem Ipsum available but the ma have suffered.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_2">02</span>
                        <h3>Add to Cart</h3>
                        <p>There are many variations of Lorem Ipsum available but the ma have suffered.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_3">03</span>
                        <h3>Payment Your Bill</h3>
                        <p>There are many variations of Lorem Ipsum available but the ma have suffered.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_4">04</span>
                        <h3>Received Your Item</h3>
                        <p>There are many variations of Lorem Ipsum available but the ma have suffered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_part mt_120 xs_mt_80 mb_120 xs_mb_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter_area wow fadeInUp">
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/counter_icon_1.png" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">950</span>+</h2>
                                <p>Happy customers</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/counter_icon_2.png" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">350</span>+</h2>
                                <p>Expert farmers</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/counter_icon_3.png" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">35</span>+</h2>
                                <p>Award Wining</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('assets') }}/images/counter_icon_4.png" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">4.9</span></h2>
                                <p>Avarage Rating</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @include('name') --}}
    @include('components.frontend.global.testimonial');
    @include('components.frontend.global.blog');
    <!--=========================
        ABOUT PAGE  END
    ==========================-->

@endsection
    
