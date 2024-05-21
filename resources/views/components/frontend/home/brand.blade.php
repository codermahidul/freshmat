    <!--=========================
        BRAND START
    ==========================-->
    <section class="brand mt_115 xs_mt_75">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_45">
                        <h4>{{ sectionTitle(2)->subheading }}</h4>
                        <h2>{{ sectionTitle(2)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="brand_item_area">
                <div class="row wow fadeInUp">
                    <div class="col-12">
                        <div class="marquee_animi">
                            <ul>
                                @forelse (partners() as $partner)
                                <li>
                                    <a href="#">
                                        <img src="{{ asset($partner->logo) }}" alt="brand" class="img-fluid w-100">
                                    </a>
                                </li>
                                @empty
                                    No Partners
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BRAND END
    ==========================-->