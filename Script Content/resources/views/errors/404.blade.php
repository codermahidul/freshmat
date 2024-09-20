@extends('layouts.frontlayout')
@section('title','404 Not Found')
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
                            <h1>{{ __('Error') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="">{{ __('404') }}</a></li>
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
    <!--========================
        ERROR PAGE START
    =========================-->
    <section class="error_page pt_120 xs_pt_80">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-6 col-sm-9 col-md-8 col-lg-7 m-auto">
                    <div class="error_text">
                        <div class="img">
                            <img src="{{ asset('assets/images/error_img.png') }}" alt="Error" class="img-fluid w-100">
                        </div>
                        <h3>{{ __('Opos! Nothing Was Found') }}</h3>
                        <p>{{ __('Something went wrong, Looks like this page doesn\'t exist anymore.') }}</p>
                        <a class="common_btn" href="{{ route('index') }}"> <i class="fas fa-long-arrow-left"></i> {{ __('go back home') }}
                            <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========================
        ERROR PAGE END
    =========================-->
@endsection
