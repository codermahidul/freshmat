
@extends('layouts.frontlayout')
@section('title','Registration')
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
                            <h1>{{ __('Sign Up') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="">{{ __('Sign Up') }}</a></li>
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
        SIGN UP PAGE START
    ==========================-->
    <section class="sign_up pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 d-none d-lg-block wow fadeInLeft">
                    <div class="sign_in_img">
                        <img src="{{ asset('assets') }}/images/sign_in_img_2.jpg" alt="Sign In" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-md-10 col-lg-7 col-xl-6 wow fadeInRight">
                    <div class="sign_in_form">
                        <h3>{{ __('Sign Up to Continue') }}</h3>
                        <form action="{{route('register')}}" method="post" id="registerForm">
                            @csrf
                            <input type="text" placeholder="Enter name" name="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="email" placeholder="Enter email address" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="password" placeholder="Password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="password" placeholder="Confirm password" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (setting('glrecaptchaStatus') == 'enable')
                            @php
                                googleRecaptcha();
                            @endphp
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                            @error('g-recaptcha-response')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @endif
                            <button type="submit" class="common_btn">{{ __('Sign Up') }}<span></span></button>
                        </form>


                        <p class="dont_account">{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
                        <p class="or">{{ __('or') }}</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/google_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    {{ __('Google') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/fb_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    {{ __('Facebook') }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/twitter_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    {{ __('Twitter') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGN UP PAGE END
    ==========================-->
@endsection

@push('scripts')
<script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>
@endpush
