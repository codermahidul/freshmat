@extends('layouts.frontlayout')
@section('title','Login')
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
                            <h1>{{ __('Sign In') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="">{{ __('Sign In') }}</a></li>
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
        SIGN IN PAGE START
    ==========================-->
    <section class="sign_in pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 d-none d-lg-block wow fadeInLeft">
                    <div class="sign_in_img">
                        <img src="{{ asset('assets') }}/images/sign_in_img_1.jpg" alt="Sign In" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-md-10 col-lg-7 col-xl-6 wow fadeInRight">
                    <div class="sign_in_form">
                        <h3>{{ __('Sign In Your Account') }}</h3>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <input type="email" placeholder="Enter email address" name="email" class="is-invalid">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="password" placeholder="Password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="forgot">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('Remeber Me') }}
                                    </label>
                                </div>
                                <a href="{{ route('reset.password') }}">{{ __('Forgot Password ?') }}</a>
                            </div>
                            <button type="submit" class="common_btn">{{ __('Sign In') }}<span></span></button>
                        </form>

                        <p class="dont_account">{{ __('Don’t have an account?') }} <a href="{{ route('register') }}">{{ __('Sign Up') }}</a></p>
                        <p class="or">{{ __('or') }}</p>
                        <ul>
                            @if (setting('glstatus') == 'enable')
                            <li>
                                <a href="{{ route('google.redirect') }}">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/google_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    {{ __('Google') }}
                                </a>
                            </li>
                            @endif
                            @if (setting('flstatus') == 'enable')
                            <li>
                                <a href="{{ route('facebook.redirect') }}">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/fb_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    {{ __('Facebook') }}
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGN IN PAGE END
    ==========================-->
@endsection
