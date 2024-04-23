@extends('layouts.frontlayout')
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
                <div class="col-xl-3 col-lg-4 wow fadeInLeft">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <div class="img">
                                <img src="{{ asset('assets') }}/images/dashboard_user_img.png" alt="dashboard" class="img-fluid w-100">
                                <label for="profile_photo"><i class="far fa-camera"></i></label>
                                <input type="file" id="profile_photo" hidden>
                            </div>
                            <h3>{{ Auth::user()->name }}</h3>
                            <p>Paris, France</p>
                        </div>
                        <div class="dashboard_sidebar_menu">
                            <ul>
                                <li><a class="active" href="dashboard.html"><i class="fas fa-user"></i> Personal
                                        Info</a></li>
                                <li><a href="dashboard_order.html"><i class="fas fa-shopping-basket"></i> Order</a></li>
                                <li><a href="dashboard_review.html"><i class="fas fa-star"></i> Reviews</a></li>
                                <li><a href="dashboard_wishlist.html"><i class="fas fa-heart"></i> Wishlist</a></li>
                                <li><a href="dashboard_change_password.html"><i class="fas fa-key"></i> Change
                                        Password</a></li>
                                <li><a href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                            class="fas fa-sign-out-alt"></i> Logout</a></li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                             </form>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 wow fadeInRight">
                    <div class="dashboard_content">

                        <p class="welcome">{{ Auth::user()->name }}</p>
                        <h2 class="dashboard_title">Welcome To Your Profile</h2>

                        <div class="dashboard_profile_info">

                            <div class="row mt_15">
                                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                                    <div class="profile_overview_item">
                                        <span><i class="fas fa-shopping-basket"></i></span>
                                        <h3>106</h3>
                                        <p>Order Active</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                                    <div class="profile_overview_item">
                                        <span><i class="fas fa-box-check"></i></span>
                                        <h3>256</h3>
                                        <p>Order Completed</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                                    <div class="profile_overview_item">
                                        <span><i class="fas fa-clipboard-list-check"></i></span>
                                        <h3>395</h3>
                                        <p>Total Order </p>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard_profile_info_list mt_25 wow fadeInUp">
                                <h2>Personal Information <a href="dashboard_info_edit.html">Edit</a></h2>
                                <ul>
                                    <li><span>Name:</span> {{ Auth::user()->name }}</li>
                                    <li><span>Email:</span> {{ Auth::user()->email }}</li>
                                    <li><span>Phone:</span> (123) - 222 -1452</li>
                                    <li><span>City:</span> Washington Dc</li>
                                    <li><span>Country:</span> USA</li>
                                    <li><span>Address:</span> 441, 4th street, Washington DC, USA</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD INFO END
    ==========================-->
@endsection