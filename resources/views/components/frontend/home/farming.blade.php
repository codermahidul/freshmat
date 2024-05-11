    <!--=========================
        FARMING START
    ==========================-->
    <section class="farming mt_120 xs_mt_80 pt_95 xs_pt_80 pb_120 xs_pb_80"
        style="background: url({{asset('assets')}}/images/farming_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-10">
                    <div class="farming_text wow fadeInLeft">
                        <div class="section_heading heading_left">
                            <h4>{{ hovg()->shortTitle }}</h4>
                            <h2>{{ hovg()->offerText }}</h2>
                        </div>
                        <p>{{ hovg()->description }}</p>
                        <a class="common_btn" href="{{ hovg()->link }}">Read more <i class="fas fa-long-arrow-right"></i>
                            <span></span></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <div class="farming_img wow fadeInUp">
                                <img src="{{asset(hovg()->thumbnail1)}}" alt="farming" class="img-fluid w-100">
                                <div class="overlay">
                                    <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                        href="{{ hovg()->video1 }}">
                                        <i class=" fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="farming_img wow fadeInUp">
                                <img src="{{asset(hovg()->thumbnail2)}}" alt="farming" class="img-fluid w-100">
                                <div class="overlay">
                                    <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                        href="{{ hovg()->video2 }}">
                                        <i class=" fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="farming_img wow fadeInUp">
                                <img src="{{asset(hovg()->thumbnail3)}}" alt="farming" class="img-fluid w-100">
                                <div class="overlay">
                                    <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                        href="{{ hovg()->video3 }}">
                                        <i class=" fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <div class="farming_img wow fadeInUp">
                                <img src="{{asset(hovg()->thumbnail4)}}" alt="farming" class="img-fluid w-100">
                                <div class="overlay">
                                    <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                        href="{{ hovg()->video4 }}">
                                        <i class=" fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FARMING END
    ==========================-->
