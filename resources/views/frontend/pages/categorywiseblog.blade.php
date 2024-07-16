@extends('layouts.frontlayout')
@section('title',$categroyName)
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
                            <h1>Blogs</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="{{ route('frontendblog') }}">Blog</a></li>
                                <li><a href="">{{ $categroyName }}</a></li>
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
        BLOG PAGE START
    ==========================-->
    <section class="blog_page pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img src="{{ asset($blog->thumbnail) }}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blog_text">
                            <ul class="top">
                                <li><i class="far fa-tag"></i> {{ $blog->blogcategory->name }}</li>
                                <li><i class="far fa-user-circle"></i> {{ $blog->user->name }}</li>
                            </ul>
                            <a class="title" href="{{ route('blogDetails',$blog->slug) }}">{{ $blog->title }}</a>
                            <ul class="bottom">
                                <li><a href="{{ route('blogDetails',$blog->slug) }}">read more <i class="fas fa-long-arrow-right"></i></a>
                                </li>
                                <li><span><i class="far fa-comment-dots"></i> {{ $blog->commentsCount }} Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    No Post Found!
                @endforelse
                {{-- Pagination --}}
                {{ $blogs->links('pagination.frontendPagination') }}
            </div>
        </div>
    </section>
    <!--=========================
        BLOG PAGE END
    ==========================-->
@endsection
