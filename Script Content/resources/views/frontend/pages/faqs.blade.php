@extends('layouts.frontlayout')
@section('title','FAQs')
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
                            <h1>{{ __('FAQ\'s') }}</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> {{ __('Home') }}</a></li>
                                <li><a href="">{{ __('FAQ\'s') }}</a></li>
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
        FAQ PAGE START
    ==========================-->
    <section class="faq_page pt_95 xs_pt_55">
        <div class="container">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        @forelse (faqs('odd') as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#id{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $item->question }}
                                </button>
                            </h2>
                            <div id="id{{ $item->id }}" class="accordion-collapse collapse {{ ($loop->index == 0) ? 'show' : '' }}"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{{ $item->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                            {{ __('No Faqs found') }}
                        @endforelse
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        @foreach (faqs('even') as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#id{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $item->question }}
                                </button>
                            </h2>
                            <div id="id{{ $item->id }}" class="accordion-collapse collapse {{ ($loop->index == 0) ? 'show' : '' }}"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{{ $item->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FAQ PAGE END
    ==========================-->
@endsection

