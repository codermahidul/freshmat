<div class="blog_sidebar_category shop_sidebar_category">
    <div class="sedebar_content">
        <h3>{{ __('Categories') }}</h3>
        <ul>
            @foreach (blogCategoryPostCounter() as $category)
            <li><a href="{{ route('categoryWiseBlog',$category->slug) }}">{{ $category->name }} <span>({{ $category->postCount }})</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
