    <!--=========================
        TESTIMONIAL START
    ==========================-->
    <section class="testimonial pt_115 xs_pt_75 pb_160 xs_pb_120" style="background: url({{asset('assets')}}/images/testimonial_bg.jpg);">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_50">
                        <h4>{{ sectionTitle(4)->subheading }}</h4>
                        <h2>{{ sectionTitle(4)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row testi_slider">
                @forelse (testimonial() as $testimonial)
                <div class="col-xl-4">
                    <div class="testimonial_item wow fadeInUp">
                        <p class="rating">
                            @php
                            for($i = 0; $i< $testimonial->rating; $i++)
                            echo '<i class="fas fa-star"></i>';
                            @endphp
                            <span>{{ $testimonial->rating }}</span>
                        </p>
                        <p class="review_text">{{ $testimonial->quote }}</p>
                        <div class="testimonial_footer">
                            <div class="img">
                                <img src="{{ asset($testimonial->photo) }}" alt="testimonial" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h3>{{ $testimonial->name }}</h3>
                                <p>{{ $testimonial->designation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    No testimonial item not found!
                @endforelse
            </div>
        </div>
    </section>
    <!--=========================
        TESTIMONIAL END
    ==========================-->