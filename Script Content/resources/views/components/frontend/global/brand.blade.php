@if ($count = partners()->count() > 0)
            <!--=========================
        BRAND START
    ==========================-->
    <section class="brand mt_115 xs_mt_75 {{ (setting('theme') == 'two') ? 'brand_2' : '' }} {{ (setting('theme') == 'three') ? 'brand_3' : '' }}">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_45">
                        <h4>
                            {{ ($viewName == 'welcome') ? sectionTitle(2)->subheading : ''  }}
                            {{ ($viewName == 'homeTwo') ? sectionTitle(13)->subheading : ''  }}
                            {{ ($viewName == 'homeThree') ? '' : ''  }}
                        </h4>
                        <h2>
                            {{ ($viewName == 'welcome') ? sectionTitle(2)->heading : ''  }}
                            {{ ($viewName == 'homeTwo') ? sectionTitle(13)->heading : ''  }}
                            {{ ($viewName == 'homeThree') ? sectionTitle(17)->heading : ''  }}
                        </h2>
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
                                    <a>
                                        <img src="{{ asset($partner->logo) }}" alt="brand" class="img-fluid w-100">
                                    </a>
                                </li>
                                @empty
                                    {{ __('No Partners') }}
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

    @endif
