{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- 
@extends('layouts.authlayout')
@section('title','Login')
@section('content')
  @include('components.dashboard.auth.loginForm')
@endsection --}}

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
                            <h1>Sign In</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Sign In</a></li>
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
                        <h3>Sign In Your Account 👋</h3>
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
                                        Remeber Me
                                    </label>
                                </div>
                                <a href="{{ route('password.request') }}">Forgot Password ?</a>
                            </div>
                            <button type="submit" class="common_btn">Sign In<span></span></button>
                        </form>

                        <p class="dont_account">Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                        <p class="or">or</p>
                        <ul>
                            @if (setting('glstatus') == 'enable')   
                            <li>
                                <a href="{{ route('google.redirect') }}">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/google_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    Google
                                </a>
                            </li>
                            @endif
                            @if (setting('flstatus') == 'enable')
                            <li>
                                <a href="{{ route('facebook.redirect') }}">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/fb_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    Facebook
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="#">
                                    <span>
                                        <img src="{{ asset('assets') }}/images/twitter_logo.png" alt="google" class="img-fluid w-100">
                                    </span>
                                    Twitter
                                </a>
                            </li>
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