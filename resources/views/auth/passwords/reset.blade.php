@extends('layouts.frontlayout')
@section('title','New Password')
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
                            <h1>Update Password</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Enter New Password</a></li>
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
        FORGOT PASSWORD START
    ==========================-->
    <section class="forgot_password pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-lg-4 d-none d-lg-block wow fadeInLeft">
                    <div class="sign_in_img">
                        <img src="{{ asset('assets/images/sign_in_img_3.jpg') }}" alt="Sign In" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-md-10 col-lg-7 col-xl-6 wow fadeInRight">
                    <div class="sign_in_form">
                        <h3>Add New Password? 👋</h3>
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="email" placeholder="Enter email address" name="email">
                            @error('email')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- New Password --}}
                            <input type="password" placeholder="Enter new  password" name="password">
                            @error('password')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            {{-- Confirm Password --}}
                            <input type="password" placeholder="Confirm new password" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <button type="submit" class="common_btn">send<span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FORGOT PASSWORD END
    ==========================-->

@endsection
