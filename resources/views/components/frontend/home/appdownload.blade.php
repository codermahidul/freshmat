    <!--=========================
        DOWNLOAD START
    ==========================-->
    <section class="download pt_110 xs_pt_70 pb_110 xs_pb_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5 col-lg-5 wow flipInX">
                    <div class="download_img">
                        <img src="{{ asset(appSection()->image) }}" alt="download" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xl-5 col-md-7 col-lg-7 m-auto wow fadeInRight">
                    <div class="download_text">
                        <div class="section_heading heading_left">
                            <h4>{{ appSection()->shortTitle }}</h4>
                            <h2>{{ appSection()->offerText }}</h2>
                        </div>
                        <P>{{ appSection()->description }}</P>
                        <ul>
                            <li>
                                <a class="common_btn" href="{{ appSection()->appleLink }}"><i class="fab fa-apple"></i> Apple Store
                                    <span></span></a>
                            </li>
                            <li>
                                <a href="{{ appSection()->playLink }}"><i class="fab fa-google-play"></i>Play Store</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DOWNLOAD END
    ==========================-->