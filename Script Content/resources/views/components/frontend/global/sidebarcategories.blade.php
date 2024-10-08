<div class="shop_sidebar_category shop_sidebar_item">
    <h3>{{ __('Categories') }}</h3>
    <ul>
        @forelse (productCategoryProductCounter() as $category)
        <li><a href="{{ route('categoryWiseProduct',$category->slug) }}">{{ $category->name }} <span>({{ $category->productCount }})</span></a></li>
        @empty
            <li>{{ __('No Category Found') }}</li>
        @endforelse
    </ul>
</div>
