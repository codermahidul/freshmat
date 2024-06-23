@extends('layouts.frontlayout')
@section('title', 'Blog | '.$blogDetails->title)
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
                            <h1>Blog Details</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">{{ $blogDetails->title }}</a></li>
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
        BLOG DETAILS START
    ==========================-->
    <section class="blog_details pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="blog_det_area">
                        <div class="blog_det_img">
                            <img src="{{ asset($blogDetails->thumbnail) }}" alt="blog images" class="img-fluid w-100">
                        </div>
                        <div class="blog_det_text_header d-flex flex-wrap">
                            <ul class="left d-flex flex-wrap">
                                <li><span></span></li>
                                <li><i class="far fa-user-circle"></i> Admin</li>
                                <li><i class="far fa-calendar-alt"></i> 15 June 2023</li>
                            </ul>
                            <ul class="right d-flex flex-wrap">
                                <li><i class="far fa-comment"></i> {{ count($comments) }}</li>
                                <li><i class="far fa-heart"></i> {{ $blogDetails->react }}</li>
                                <li><i class="fas fa-share-alt"></i> 15</li>
                            </ul>
                        </div>
                        <div class="blog_det_text">
                            <h2>{{ $blogDetails->title }}</h2>
                            <p>
                                {!! $blogDetails->description !!}
                                {{-- {{ $blogDetails->description }} --}}
                            </p>
                        </div>
                        <div class="blog_tags_and_share d-flex flex-wrap">
                            <ul class="left d-flex flex-wrap">
                                <li><a href="#">Grocery</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Grocery</a></li>
                            </ul>
                            <ul class="right d-flex flex-wrap">
                                <li>Share :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="det_comment_area">
                            <h3>Comments ({{ count($comments) }})</h3>
                            @forelse ($comments as $comment)
                            <div class="single_comment">
                                <div class="img">
                                    <img src="{{ asset($comment->user->userProfile->photo) }}" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>{{ $comment->user->name }} <span>{{ $comment->created_at->diffForHumans() }}</span></h4>
                                    <p>{{ $comment->content }}</p>
                                    <a href="#"><i class="fas fa-reply"></i> reply</a>
                                </div>
                            </div>
                            {{-- <div class="single_comment reply">
                                <div class="img">
                                    <img src="images/testimonial_img_2.jpg" alt="comment" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Indigo Violet <span>May 8, 2023 at 6:49 am</span></h4>
                                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro
                                        rem ipsum quia qued inventore veritatis.</p>
                                    <a href="#"><i class="fas fa-reply"></i> reply</a>
                                </div>
                            </div> --}}
                            @empty
                                No Comment
                            @endforelse
                            <div class="pagination mt_30">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="far fa-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link active" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="det_comment_input">
                            <h3>Leave A Comments</h3>
                            <form method="POST" action="{{ route('insertComment',$slug) }}">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-xl-6">
                                        <div class="review_input_box">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="review_input_box">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div> --}}
                                    <div class="col-xl-12">
                                        <div class="review_input_box">
                                            <textarea class="is-invalid" rows="5" placeholder="Write Comment...." name="content">{{ old('content') }}</textarea>
                                            @error('content')
                                             <span class="text-danger d-block">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="common_btn">Submit Comment
                                            <span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar" id="sticky_sidebar">
                        <div class="blog_sidebar_search">
                            <div class="sedebar_content">
                                <h3>Search Here</h3>
                                <form>
                                    <input type="text" placeholder="Search...">
                                    <button><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        @include('components.frontend.global.sidebarblogcategories')
                        @include('components.frontend.global.sidebarblogrecentpost')
                        @include('components.frontend.global.sidebarblogtags')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BLOG DETAILS END
    ==========================-->
@endsection