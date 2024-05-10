<div class="blog_sidebar_category shop_sidebar_category">
    <div class="sedebar_content">
        <h3>Categories</h3>
        <ul>
            @foreach (blogCategoryPostCounter() as $category)   
            <li><a href="shop.html">{{ $category->name }} <span>({{ $category->postCount }})</span></a></li>
            @endforeach
        </ul>
    </div>
</div>