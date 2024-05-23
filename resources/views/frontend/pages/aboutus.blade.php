@extends('layouts.frontlayout')
@section('title','About Us')
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
                            <h1>About Us</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">About Us</a></li>
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
        ABOUT PAGE  START
    ==========================-->
    <section class="about pt_120 xs_pt_80">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-md-8 col-lg-6 wow fadeInLeft">
                    <div class="about_img">
                        <div class="img">
                            <img src="{{ asset($contents->image) }}" alt="about" class="img-fluid w-100">
                        </div>
                        <p>{{ $contents->quote }}</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight">
                    <div class="about_text">
                        <div class="section_heading heading_left mb_20">
                            <h4>{{ $contents->shortTitle }}</h4>
                            <h2>{{ $contents->title }}</h2>
                        </div>
                        <!-- <h5>We connect buyers and sellers of natural, organic products who are so beguiled demoralized
                            charms of pleasure.</h5> -->
                        <p>{{ $contents->description }}</p>
                        <ul>
                            <li>
                                <span>01</span>
                                <h4> {{ $contents->listItemOne }}</h4>
                            </li>
                            <li>
                                <span>02</span>
                                <h4>{{ $contents->listItemTwo }}</h4>
                            </li>
                            <li>
                                <span>03</span>
                                <h4>{{ $contents->listItemThree }}</h4>
                            </li>
                            <li>
                                <span>04</span>
                                <h4>{{ $contents->listItemFour }}</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_choose mt_120 xs_mt_80 pt_115 xs_pt_75 pb_120 xs_pb_80"
        style="background: url({{ asset('assets') }}/images/why_choose_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>{{ sectionTitle(6)->subheading }}</h4>
                        <h2>{{ sectionTitle(6)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset($contents->f1icon) }}" alt="why choose" class="img-fluid w-100">
                            </span>
                            {{ $contents->f1title }}
                        </h2>
                        <p>{{ $contents->f1description }}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset($contents->f2icon) }}" alt="why choose" class="img-fluid w-100">
                            </span>
                            {{ $contents->f2title }}
                        </h2>
                        <p>{{ $contents->f2description }}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="why_choose_item">
                        <h2>
                            <span>
                                <img src="{{ asset($contents->f3icon) }}" alt="why choose" class="img-fluid w-100">
                            </span>
                            {{ $contents->f3title }}
                        </h2>
                        <p>{{ $contents->f3description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work_process pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>{{ sectionTitle(7)->subheading }}</h4>
                        <h2>{{ sectionTitle(7)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number">01</span>
                        <h3>{{ $contents->w1title }}</h3>
                        <p>{{ $contents->w1description }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_2">02</span>
                        <h3>{{ $contents->w2title }}</h3>
                        <p>{{ $contents->w2description }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_3">03</span>
                        <h3>{{ $contents->w3title }}</h3>
                        <p>{{ $contents->w3description }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="work_process_item">
                        <span class="number number_4">04</span>
                        <h3>{{ $contents->w4title }}</h3>
                        <p>{{ $contents->w4description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_part mt_120 xs_mt_80 mb_120 xs_mb_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter_area wow fadeInUp">
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="{{ $contents->c1icon }}" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">{{ $contents->c1number }}</span>+</h2>
                                <p>{{ $contents->c1text }}</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ $contents->c2icon }}" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">{{ $contents->c2number }}</span>+</h2>
                                <p>{{ $contents->c2text }}</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ $contents->c3icon }}" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">{{ $contents->c3number }}</span>+</h2>
                                <p>{{ $contents->c3text }}</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ $contents->c4icon }}" alt="counter" class="img-fluid w-100">
                                </div>
                                <h2><span class="counter">{{ $contents->c4number }}</span></h2>
                                <p>{{ $contents->c4text }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @include('name') --}}
    @include('components.frontend.global.testimonial');
    @include('components.frontend.global.blog');
    <!--=========================
        ABOUT PAGE  END
    ==========================-->

@endsection
    
