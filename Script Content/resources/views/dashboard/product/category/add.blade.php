@extends('layouts.app')
@section('title','Add New Category | Dashboard')
@section('content')
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Add Product Category') }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Home') }}</a></li>
          <li class="breadcrumb-item"><a href="{{route('productCategory')}}">{{ __('Category') }}</a></li>
          <li class="breadcrumb-item active">{{ __('New Category') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection
  @include('components.dashboard.product.category.add')
@endsection
