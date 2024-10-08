<div class="blog_sidebar_product">
    <div class="sedebar_content">
        <h3>{{ __('Recent Post') }}</h3>
        <ul>
            @foreach ($recentPosts as $post)
            <li>
                <div class="img">
                    <img src="{{ asset($post->thumbnail) }}" alt="product"
                        class="img-fluid w-100">
                </div>
                <div class="text">
                    <p><i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d-M-Y') }}</p>
                    <a href="{{ route('blogDetails',$post->slug) }}">{{ $post->title }}</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
