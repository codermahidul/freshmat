@extends('layouts.frontlayout')
@section('title','Freshmat')
@section('content')

@include('components.frontend.home.slider')
@include('components.frontend.home.categories')
@include('components.frontend.home.advertisement')
@include('components.frontend.home.productfilter')
@include('components.frontend.home.farming')
@include('components.frontend.global.brand')
@include('components.frontend.home.specialproduct')
@include('components.frontend.home.countdown')
@include('components.frontend.home.appdownload')
@include('components.frontend.global.testimonial')
@include('components.frontend.global.blog')

@endsection
