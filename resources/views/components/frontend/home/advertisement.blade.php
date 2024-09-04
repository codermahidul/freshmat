    <!--=========================
        ADD BANNER START
    ==========================-->
    <section class="add_banner pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="add_banner_item wow fadeInUp" style="background: url({{ asset(banner(1)->backgroundImg) }});">
                        <div class="add_banner_item_text wow fadeInLeft">
                            <h4>{{ banner(1)->shortTitle }}</h4>
                            <h2>{{ banner(1)->offerText }}</h2>
                            <a class="common_btn" href="{{ banner(1)->link }}">{{ __('shop now') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="add_banner_item wow fadeInUp" style="background: url({{ asset(banner(2)->backgroundImg) }});">
                        <div class="add_banner_item_text wow fadeInLeft">
                            <h4>{{ banner(2)->shortTitle }}</h4>
                            <h2>{{ banner(2)->offerText }}</h2>
                            <a class="common_btn bg_blck" href="{{ banner(2)->link }}">{{ __('shop now') }} <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        ADD BANNER END
    ==========================-->
