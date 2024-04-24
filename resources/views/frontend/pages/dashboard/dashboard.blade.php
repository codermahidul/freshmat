@extends('layouts.frontlayout')
@section('title','User Dashbord')
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
                            <h1>Personal Info</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Personal Info</a></li>
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
        DASHBOARD INFO START
    ==========================-->
    <section class="dashboard pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                @include('components.frontend.dashboard.menu')
                @include('components.frontend.dashboard.personalInfo')
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD INFO END
    ==========================-->
@endsection