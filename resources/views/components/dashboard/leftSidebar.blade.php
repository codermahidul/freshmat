<ul class="sidenav-inner py-1">

    <!-- Dashboards -->
    <li class="sidenav-item {{ Route::currentRouteNamed('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-speedometer"></i>
            <div>Dashboards</div>
        </a>
    </li>

    <!-- Orders -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('order', 'newOrder', 'deliveryInProcess', 'complateOrder', 'cancelOrder') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Orders') }}</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="{{ route('order') }}" class="sidenav-link">
                    <div>{{ __('All Orders') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('newOrder') }}" class="sidenav-link">
                    <div>{{ __('New Orders') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('deliveryInProcess') }}" class="sidenav-link">
                    <div>{{ __('Processing Orders') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('complateOrder') }}" class="sidenav-link">
                    <div>{{ __('Complete Orders') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('cancelOrder') }}" class="sidenav-link">
                    <div>{{ __('Canceled Orders') }}</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- eCommerce -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('productadd', 'productedit', 'products', 'productCategory', 'productCategoryAdd', 'coupon', 'couponadd', 'delivery.location', 'delivery.edit', 'delivery.add', 'productcategoryedit', 'currency') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('eCommerce') }}</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="{{ route('productadd') }}" class="sidenav-link">
                    <div>{{ __('Add New Product') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('products') }}" class="sidenav-link">
                    <div>{{ __('Product List') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('productCategory') }}" class="sidenav-link">
                    <div>{{ __('Product Category') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('coupon') }}" class="sidenav-link">
                    <div>{{ __('Coupon') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('currency') }}" class="sidenav-link">
                    <div>{{ __('Currency') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('delivery.location') }}" class="sidenav-link">
                    <div>{{ __('Location') }}</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Blog -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('category.edit', 'blog', 'blog.add', 'category', 'category.add', 'category.insert', 'comments') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Blog') }}</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="{{ route('blog.add') }}" class="sidenav-link">
                    <div>{{ __('New Post') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('blog') }}" class="sidenav-link">
                    <div>{{ __('All Post') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('category') }}" class="sidenav-link">
                    <div>{{ __('Category') }}</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="{{ route('comments') }}" class="sidenav-link">
                    <div>{{ __('Comments') }}</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="sidenav-divider mb-1"></li>
    <li class="sidenav-header small font-weight-semibold">{{ __('SETTINGS') }}</li>

    <!-- Banners -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('homeonebanner', 'pdpagebannerIndex', 'hometwobanner', 'homeThreeBanner') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Banners') }}</div>
        </a>

        <ul class="sidenav-menu">
            @if (setting('theme') == 'all' || setting('theme') == 'one')
                <li class="sidenav-item">
                    <a href="{{ route('homeonebanner') }}" class="sidenav-link">
                        <div>{{ __('Home One') }}</div>
                    </a>
                </li>
            @endif
            @if (setting('theme') == 'all' || setting('theme') == 'two')
                <li class="sidenav-item">
                    <a href="{{ route('hometwobanner') }}" class="sidenav-link">
                        <div>{{ __('Home Two') }}</div>
                    </a>
                </li>
            @endif
            @if (setting('theme') == 'all' || setting('theme') == 'three')
                <li class="sidenav-item">
                    <a href="{{ route('homeThreeBanner') }}" class="sidenav-link">
                        <div>{{ __('Home Three') }}</div>
                    </a>
                </li>
            @endif
            <li class="sidenav-item">
                <a href="{{ route('pdpagebannerIndex') }}" class="sidenav-link">
                    <div>{{ __('Product Details') }}</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Deals -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('homeOneDeals', 'homeTwoDeals', 'homeThreeDeals') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Deals') }}</div>
        </a>

        <ul class="sidenav-menu">
            @if (setting('theme') == 'all' || setting('theme') == 'one')
                <li class="sidenav-item">
                    <a href="{{ route('homeOneDeals') }}" class="sidenav-link">
                        <div>{{ __('Home One') }}</div>
                    </a>
                </li>
            @endif
            @if (setting('theme') == 'all' || setting('theme') == 'two')
                <li class="sidenav-item">
                    <a href="{{ route('homeTwoDeals') }}" class="sidenav-link">
                        <div>{{ __('Home Two') }}</div>
                    </a>
                </li>
            @endif
            @if (setting('theme') == 'all' || setting('theme') == 'three')
                <li class="sidenav-item">
                    <a href="{{ route('homeThreeDeals') }}" class="sidenav-link">
                        <div>{{ __('Home Three') }}</div>
                    </a>
                </li>
            @endif
        </ul>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('reviews') ? 'active open' : '' }}">
        <a href="{{ route('reviews') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Reviews') }}</div>
        </a>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('testimonial') ? 'active open' : '' }}">
        <a href="{{ route('testimonial') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Testimonial') }}</div>
        </a>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('sectionTitle') ? 'active open' : '' }}">
        <a href="{{ route('sectionTitle') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Section Title') }}</div>
        </a>
    </li>

    @if (setting('theme') == 'all' || setting('theme') == 'one' || setting('theme') == 'three')
    <li class="sidenav-item {{ Route::currentRouteNamed('slider') ? 'active open' : '' }}">
        <a href="{{ route('slider') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Slider') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ __('Home 1 & 3') }}</div>
            </div>
        </a>
    </li>
    @endif

    @if (setting('theme') == 'all' || setting('theme') == 'one')
    <li class="sidenav-item {{ Route::currentRouteNamed('homeOneVideoGallery') ? 'active open' : '' }}">
        <a href="{{ route('homeOneVideoGallery') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Video Gallery') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ __('Home 1') }}</div>
            </div>
        </a>
    </li>
    @endif
    @if (setting('theme') == 'all' || setting('theme') == 'two')
    <li class="sidenav-item {{ Route::currentRouteNamed('instagramPost') ? 'active open' : '' }}">
        <a href="{{ route('instagramPost') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Instagram Post') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ __('Home 2') }}</div>
            </div>
        </a>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('htpolicy') ? 'active open' : '' }}">
        <a href="{{ route('htpolicy') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Policy Section') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ __('Home 2') }}</div>
            </div>
        </a>
    </li>
    @endif


    @if (setting('theme') == 'all' || setting('theme') == 'three')
    <li class="sidenav-item {{ Route::currentRouteNamed('h3bvideo') ? 'active open' : '' }}">
        <a href="{{ route('h3bvideo') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Video Section') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ __('Home 3') }}</div>
            </div>
        </a>
    </li>
    @endif

    <li class="sidenav-item {{ Route::currentRouteNamed('pg.index') ? 'active open' : '' }}">
        <a href="{{ route('pg.index') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Payment Getways') }}</div>
        </a>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('partner') ? 'active open' : '' }}">
        <a href="{{ route('partner') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Partner') }}</div>
        </a>
    </li>

    @if (setting('theme') == 'all' || setting('theme') == 'one' || setting('theme') == 'three')
    <li class="sidenav-item {{ Route::currentRouteNamed('appLinks') ? 'active open' : '' }}">
        <a href="{{ route('appLinks') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('App Download') }}</div>
        </a>
    </li>
    @endif

    <!-- Pages -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('contactUsPage', 'aboutUsPage', 'privacyPolicy.index','termsConditon.index','faqs') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Pages') }}</div>
        </a>

        <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{ route('contactUsPage') }}" class="sidenav-link">
                        <div>{{ __('Contact Us') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('aboutUsPage') }}" class="sidenav-link">
                        <div>{{ __('About Us') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('privacyPolicy.index') }}" class="sidenav-link">
                        <div>{{ __('Privacy Policy') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('termsConditon.index') }}" class="sidenav-link">
                        <div>{{ __('Terms & Condititon') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('faqs') }}" class="sidenav-link">
                        <div>{{ __('FAQs') }}</div>
                    </a>
                </li>
        </ul>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('inbox') ? 'active open' : '' }}">
        <a href="{{ route('inbox') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Message') }}</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">{{ unreadMessage() }}</div>
            </div>
        </a>
    </li>


    <!-- Email Configuration -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('emailConfig', 'emailTemplate') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Email Configuration') }}</div>
        </a>

        <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{ route('emailConfig') }}" class="sidenav-link">
                        <div>{{ __('Setting') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('emailTemplate') }}" class="sidenav-link">
                        <div>{{ __('Email Template') }}</div>
                    </a>
                </li>
        </ul>
    </li>

    <!-- Theme Option -->
    <li
        class="sidenav-item {{ Route::currentRouteNamed('topbar', 'footerTop','footer') ? 'active open' : '' }}">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle active">
            <i class="sidenav-icon ion ion-ios-albums"></i>
            <div>{{ __('Theme Option') }}</div>
        </a>

        <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="{{ route('topbar') }}" class="sidenav-link">
                        <div>{{ __('Topbar') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="" class="sidenav-link">
                        <div>{{ __('Menu') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('footerTop') }}" class="sidenav-link">
                        <div>{{ __('Footer Top') }}</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="{{ route('footer') }}" class="sidenav-link">
                        <div>{{ __('Footer') }}</div>
                    </a>
                </li>
        </ul>
    </li>

    <li class="sidenav-item {{ Route::currentRouteNamed('setting') ? 'active open' : '' }}">
        <a href="{{ route('setting') }}" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>{{ __('Setting') }}</div>
        </a>
    </li>

</ul>
