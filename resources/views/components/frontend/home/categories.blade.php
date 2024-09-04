    <!--=========================
        CATEGORIES START
    ==========================-->
    <section class="categories pt_110 xs_pt_70">
        <div class="container">
            <div class="slider_padding">
                <div class="row category_slider">
                    @forelse ($productCategories as $category)
                    <div class="col-xl-2">
                        <a href="{{ route('categoryWiseProduct',$category->slug) }}" class="category_item color_1 wow fadeInUp">
                            <div class="icon">
                                <img src="{{asset($category->icon)}}" alt="category" class="img-fluid w-100">
                            </div>
                            <h4>{{ $category->name }}</h4>
                        </a>
                    </div>
                    @empty
                        {{ __('No Category Found!') }}
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        CATEGORIES END
    ==========================-->
