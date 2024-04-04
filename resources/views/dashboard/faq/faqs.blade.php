@extends('layouts.app')
@section('title','FAQs | Dashboard')
@section('content')
@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">FAQs</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">FAQs List</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection
  @include('components.dashboard.pages.faqs')
@endsection