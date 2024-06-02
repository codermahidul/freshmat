@extends('layouts.frontlayout')
@section('title','Contact Us')
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
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Contact Us</a></li>
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
        CONTACT PAGE START
    ==========================-->
    <section class="contact pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="contact_info">
                        <span>
                            <img src="{{ asset($contents->b1icon) }}" alt="contact" class="img-fluid w-100">
                        </span>
                        <h3> {{ $contents->b1title }}</h3>
                        <p>{{ $contents->b1text }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="contact_info">
                        <span>
                            <img src="{{ asset($contents->b2icon) }}" alt="contact" class="img-fluid w-100">
                        </span>
                        <h3>{{ $contents->b2title }}</h3>
                        <a href="callto:{{ $contents->b2textOne }}">{{ $contents->b2textOne }}</a>
                        <a href="callto:{{ $contents->b2textTwo }}">{{ $contents->b2textTwo }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="contact_info">
                        <span>
                            <img src="{{ asset($contents->b3icon) }}" alt="contact" class="img-fluid w-100">
                        </span>
                        <h3>{{ $contents->b3title }}</h3>
                        <a href="mailto:{{ $contents->b3textOne }}">{{ $contents->b3textOne }}</a>
                        <a href="mailto:{{ $contents->b3textTwo }}">{{ $contents->b3textTwo }}</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp d-lg-none d-xl-block">
                    <div class="contact_info">
                        <span>
                            <img src="{{ asset($contents->b4icon) }}" alt="contact" class="img-fluid w-100">
                        </span>
                        <h3>{{ $contents->b4title }}</h3>
                        <a target="_blank" href="{{ $contents->b4textUrlOne }}">{{ $contents->b4textOne }}</a>
                        <a target="_blank" href="{{ $contents->b4textUrlTwo }}">{{ $contents->b4textTwo }}</a>
                    </div>
                </div>
            </div>
            <div class="row mt_50">
                <div class="col-lg-4 wow fadeInLeft d-none d-lg-block">
                    <div class="contact_img">
                        <img src="{{ $contents->image }}" alt="contact" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <div class="contact_form">
                        <h3>Contact for Services</h3>
                        <form action="{{ route('sendMessage') }}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name" name="name">
                                @error('name')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email Address" name="email">
                                @error('email')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone Number" name="phone">
                                @error('phone')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject">
                                @error('subject')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <textarea rows="6" placeholder="Write Message" name="message"></textarea>
                                @error('message')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                                <button type="submit" class="common_btn">Send A
                                    Message<span></span></button>
                            </div>
                            @session('success')
                                <span class="text-success d-block">{{ session('success') }}</span>
                            @endsession
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row mt_120 wow fadeInUp xs_mt_80">
                <div class="col-12">
                    <div class="contact_map">
                        <iframe
                            src="{{ $contents->googleMap }}"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        CONTACT PAGE END
    ==========================-->
@endsection
    
