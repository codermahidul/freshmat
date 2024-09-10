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
                            <h1>{{ __('Password Change') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="{{ route('userDashboard') }}">{{ __('Dashboard') }}</a></li>
                                <li><a href="">{{ __('Password Change') }}</a></li>
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
                            <h2 class="dashboard_title">{{ __('Change Password') }}</h2>
                            <form class="dashboard_change_password" action="{{ route('userPasswordUpdate') }}" method="POST">
                               @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="password" placeholder="Current Password" name="current_password" value="{{ old('current_password') }}">
                                        @error('current_password')
                                            <span class="text-danger d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="password" placeholder="New Password" name="new_password" value="{{ old('new_password') }}">
                                        @error('new_password')
                                            <span class="text-danger d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="password" placeholder="Conform Password" name="new_password_confirmation" value="{{ old('new_password_confirmation') }}">
                                        @error('new_password_confirmation')
                                            <span class="text-danger d-block">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="common_btn">{{ __('Submit') }} <span></span></button>
                                    </div>
                                    @if (session('success'))
                                        <span class="text-success d-block">{{ session('success') }}</span>
                                    @endif
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====================================
        DASHBOARD CHANGE PASSWORD END
    =====================================-->
@endsection
