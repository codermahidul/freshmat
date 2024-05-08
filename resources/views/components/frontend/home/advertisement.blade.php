    <!--=========================
        ADD BANNER START
    ==========================-->
    <section class="add_banner pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                @foreach (banner(1) as $homeOneBannerOne)
                <div class="col-lg-6">
                    <div class="add_banner_item wow fadeInUp" style="background: url({{ asset($homeOneBannerOne->backgroundImg) }});">
                        <div class="add_banner_item_text wow fadeInLeft">
                            <h4>{{ $homeOneBannerOne->shortTitle }}</h4>
                            <h2>{{ $homeOneBannerOne->offerText }}</h2>
                            <a class="common_btn" href="{{ $homeOneBannerOne->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach (banner(2) as $homeOneBannerTwo)
                <div class="col-lg-6">
                    <div class="add_banner_item wow fadeInUp" style="background: url({{ asset($homeOneBannerTwo->backgroundImg) }});">
                        <div class="add_banner_item_text wow fadeInLeft">
                            <h4>{{ $homeOneBannerTwo->shortTitle }}</h4>
                            <h2>{{ $homeOneBannerTwo->offerText }}</h2>
                            <a class="common_btn bg_blck" href="{{ $homeOneBannerTwo->link }}">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========================
        ADD BANNER END
    ==========================-->