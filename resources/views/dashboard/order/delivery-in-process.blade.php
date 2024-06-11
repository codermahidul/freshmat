@extends('layouts.app')
@section('title','Processing Order | Dashboard')
@section('content')
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Processing Order</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('order')}}">Order</a></li>
          <li class="breadcrumb-item active">Processing Order</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</div>
<!-- /.content-header -->
@endsection
  @include('components.dashboard.order.delivery-in-process')
@endsection