@extends('layouts.frontlayout')
@section('title','Freshmat')
@section('content')

@include('components.frontend.home.banner')
@include('components.frontend.home.categories')
@include('components.frontend.home.advertisement')
@include('components.frontend.home.productfilter')
@include('components.frontend.home.farming')
@include('components.frontend.home.brand')
@include('components.frontend.home.specialproduct')
@include('components.frontend.home.countdown')
@include('components.frontend.home.appdownload')
@include('components.frontend.global.testimonial')
@include('components.frontend.global.blog')

@endsection
