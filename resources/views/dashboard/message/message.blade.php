@extends('layouts.app')
@section('title','Contact Message | Dashboard')
@section('content')
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ __('Message Details') }}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Home') }}</a></li>
          <li class="breadcrumb-item"><a href="{{route('inbox')}}">{{ __('Messages') }}</a></li>
          <li class="breadcrumb-item active">{{ __('Message Details') }}</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div>
</div>
<!-- /.content-header -->
@endsection
  @include('components.dashboard.message.message')
@endsection
