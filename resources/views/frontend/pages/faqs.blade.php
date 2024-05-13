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
                            <h1>FAQ's</h1>
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fal fa-home-lg"></i> Home</a></li>
                                <li><a href="">FAQ's</a></li>
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
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Newsfe ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Who does the technology work ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Who is teamhave for ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree01" aria-expanded="false"
                                    aria-controls="collapseThree01">
                                    Who often will I get Teamhice Mails ?
                                </button>
                            </h2>
                            <div id="collapseThree01" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne01" aria-expanded="true" aria-controls="collapseOne01">
                                    Who often will I get Teamhice Mails ?
                                </button>
                            </h2>
                            <div id="collapseOne01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo01" aria-expanded="false" aria-controls="collapseTwo01">
                                    Who does the technology work ?
                                </button>
                            </h2>
                            <div id="collapseTwo01" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree02" aria-expanded="false"
                                    aria-controls="collapseThree02">
                                    Who is teamhave for ?
                                </button>
                            </h2>
                            <div id="collapseThree02" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree03" aria-expanded="false"
                                    aria-controls="collapseThree03">
                                    Who often will I get Teamhice Mails ?
                                </button>
                            </h2>
                            <div id="collapseThree03" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use as filler text for layouts, non-readability is of great before import
                                        ancebut
                                        because those who do not know how to pursue pleasure rationally encounter
                                        is more beautiful consequences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FAQ PAGE END
    ==========================-->
@endsection
    
