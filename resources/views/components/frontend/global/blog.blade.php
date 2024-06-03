    <!--=========================
        BLOG START
    ==========================-->
    <section class="blog {{ (setting('theme') == 'two') ? 'blog_2' : '' }} {{ (setting('theme') == 'three') ? 'blog_3' : '' }} pt_115 xs_pt_75">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_15">
                        <h4>{{ sectionTitle(5)->subheading }}</h4>
                        <h2>{{ sectionTitle(5)->heading }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse (globalBlog() as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog_item wow fadeInUp">
                        <div class="blog_img">
                            <img src="{{ asset($blog->thumbnail) }}" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blog_text">
                            <ul class="top">
                                <li><i class="far fa-tag"></i> {{ $blog->blogcategory->name }}</li>
                                <li><i class="far fa-user-circle"></i> {{ $blog->user->name }}</li>
                            </ul>
                            <a class="title" href="{{ route('blogDetails',$blog->slug) }}">{{ $blog->title }}</a>
                            <ul class="bottom">
                                <li><a href="{{ route('blogDetails',$blog->slug) }}">read more <i class="fas fa-long-arrow-right"></i></a>
                                </li>
                                <li><span><i class="far fa-comment-dots"></i> {{ $blog->commentsCount }} Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    No Post Found!
                @endforelse
            </div>
        </div>
    </section>
    <!--=========================
        BLOG END
    ==========================-->