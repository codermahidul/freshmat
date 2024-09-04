@extends('layouts.frontlayout')
@section('title','Dashboard | Reviews')
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
                            <h1>{{ __('Reviews') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('userDashboard') }}">{{ __('Dashboard') }}</a></li>
                                <li><a href="">{{ __('Reviews') }}</a></li>
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
    <!--================================
        DASHBOARD REVIEWS START
    =================================-->
    <section class="dashboard pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                @include('components.frontend.dashboard.menu')
                @include('components.frontend.dashboard.review')
            </div>
        </div>
    </section>
    <!--================================
        DASHBOARD REVIEWS END
    =================================-->
@endsection
