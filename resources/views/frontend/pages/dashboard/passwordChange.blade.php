@extends('layouts.frontlayout')
@section('title','Change Password')
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
                            <h1>Password Change</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('userDashboard') }}">Dashboard</a></li>
                                <li><a href="">Password Change</a></li>
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
    <!--====================================
        DASHBOARD CHANGE PASSWORD START
    =====================================-->
    <section class="dashboard pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                @include('components.frontend.dashboard.menu')
                <div class="col-xl-9 col-lg-8 wow fadeInRight">
                    <div class="dashboard_content">
                        <h2 class="dashboard_title">Change Password</h2>
                        <form class="dashboard_change_password">
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="password" placeholder="Current Password">
                                </div>
                                <div class="col-xl-6">
                                    <input type="password" placeholder="New Password">
                                </div>
                                <div class="col-xl-12">
                                    <input type="password" placeholder="Conform Password">
                                    <button type="submit" class="common_btn">Submit <span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====================================
        DASHBOARD CHANGE PASSWORD END
    =====================================-->
@endsection