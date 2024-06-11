@extends('layouts.app')
@section('title','New Order | Dashboard')
@section('content')
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">New Order</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{route('order')}}">Order</a></li>
          <li class="breadcrumb-item active">New Order</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</div>
<!-- /.content-header -->
@endsection
  @include('components.dashboard.order.new')
@endsection