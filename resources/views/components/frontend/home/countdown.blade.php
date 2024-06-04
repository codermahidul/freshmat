    <!--=========================
        COUNTDOWN START
    ==========================-->
    <section class="countdown mt_120 xs_mt_80 pt_115 xs_pt_75 pb_115 xs_pb_75"
        style="background: url({{asset(deals(1)->backgroundImg)}})">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-md-9 col-lg-6 col-xl-6">
                    <div class="countdown_text wow fadeInLeft">
                        <div class="section_heading heading_left">
                            <h4>{{ deals(1)->shortTitle }}</h4>
                            <h2>{{ deals(1)->offerText }}</h2>
                        </div>
                        <p>{{ deals(1)->description }}</p>
                        <div class="simply-countdown simply-countdown-one"></div>
                        <a class="common_btn" href="{{ deals(1)->link }}">shop now <i class="fas fa-long-arrow-right"></i>
                            <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        COUNTDOWN END
    ==========================-->