      <!--=========================
        BANNER START
    ==========================-->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <ul class="menu_cat_item">
                        @forelse ($productCategories as $category)
                        <li>
                            <a href="{{ route('categoryWiseProduct',$category->slug) }}">
                                <span>
                                    <img src="{{ asset($category->icon) }}" alt="category">
                                </span>
                                {{ $category->name }}
                            </a>
                        </li>
                        @empty
                            No Category Found
                        @endforelse
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="banner_content">
                        <div class="row banner_slider">
                            @foreach ($sliders as $slider)
                            <div class="col-xl-12">
                                <div class="single_slider" style="background: url({{ asset($slider->backgroundImg) }});">
                                    <div class="single_slider_text wow fadeInDown">
                                        <h3>{{ $slider->shortTitle }}</h3>
                                        <h1>{{ $slider->offerText }}</h1>
                                        <p>{{ $slider->description }}</p>
                                        <a class="common_btn" href="{{ $slider->link }}">shop now <i
                                                class="fas fa-long-arrow-right"></i> <span></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BANNER END
    ==========================-->