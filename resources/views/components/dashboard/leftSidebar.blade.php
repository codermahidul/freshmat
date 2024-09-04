 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      {{-- <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">{{ __('Freshmat Dashboard') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{ Route::currentRouteNamed('home') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ __('Dashboard') }}
              </p>
            </a>
          </li>
          <li class="nav-item {{ (Route::currentRouteNamed('order','newOrder','deliveryInProcess','complateOrder','cancelOrder')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Route::currentRouteNamed('order','newOrder','deliveryInProcess','complateOrder','cancelOrder')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                {{ __('Orders') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('order') }}" class="nav-link {{ (Route::currentRouteNamed('order')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('All Orders') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('newOrder') }}" class="nav-link {{ (Route::currentRouteNamed('newOrder')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('New Orders') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('deliveryInProcess') }}" class="nav-link {{ (Route::currentRouteNamed('deliveryInProcess')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Processing Orders') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('complateOrder') }}" class="nav-link {{ (Route::currentRouteNamed('complateOrder')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Complete Orders') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cancelOrder') }}" class="nav-link {{ (Route::currentRouteNamed('cancelOrder')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Canceled Orders') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ (Route::currentRouteNamed('productadd','productedit','products','productCategory','productCategoryAdd','coupon','couponadd','delivery.location','delivery.edit','delivery.add','productcategoryedit')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Route::currentRouteNamed('productadd','products','productCategory','productCategoryAdd','coupon','currency','couponadd','delivery.location')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                {{ __('eCommerce') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('productadd') }}" class="nav-link {{ (Route::currentRouteNamed('productadd')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Add New Product') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('products') }}" class="nav-link {{ (Route::currentRouteNamed('products','productedit')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Product List') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('productCategory') }}" class="nav-link {{ (Route::currentRouteNamed('productCategory','productCategoryAdd','productcategoryedit')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Product Category') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('coupon') }}" class="nav-link {{ (Route::currentRouteNamed('coupon','couponadd')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Coupon') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('currency') }}" class="nav-link {{ (Route::currentRouteNamed('currency')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Currency') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delivery.location') }}" class="nav-link {{ (Route::currentRouteNamed('delivery.location','delivery.edit','delivery.add')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Location') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ Route::currentRouteNamed('category.edit','blog','blog.add','category','category.add','category.insert','comments') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('blog','blog.add','category','category.add','category.insert','comments') ? 'active':''}}">
              <i class="nav-icon fas fa-pen-alt"></i>
              <p>
                {{ __('Blog') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blog.add')}}" class="nav-link {{Route::currentRouteNamed('blog.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('New Post') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blog') }}" class="nav-link {{ Route::currentRouteNamed('blog') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('All Post') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category')}}" class="nav-link {{ Route::currentRouteNamed('category','category.add','category.edit') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Category') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('comments')}}" class="nav-link {{ Route::currentRouteNamed('comments') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Comments') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('homeonebanner','pdpagebannerIndex','hometwobanner','homeThreeBanner') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('homeonebanner','pdpagebannerIndex','hometwobanner','homeThreeBanner') ? 'active':''}}">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                {{ __('Banners') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (setting('theme') == 'all' || setting('theme') == 'one')
              <li class="nav-item">
                <a href="{{ route('homeonebanner') }}" class="nav-link {{Route::currentRouteNamed('homeonebanner') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home One') }}</p>
                </a>
              </li>
              @endif

              @if (setting('theme') == 'all' || setting('theme') == 'two')
              <li class="nav-item">
                <a href="{{ route('hometwobanner') }}" class="nav-link {{ Route::currentRouteNamed('hometwobanner') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home Two') }}</p>
                </a>
              </li>
              @endif

              @if (setting('theme') == 'all' || setting('theme') == 'three')
              <li class="nav-item">
                <a href="{{ route('homeThreeBanner') }}" class="nav-link {{ Route::currentRouteNamed('homeThreeBanner') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home Three') }}</p>
                </a>
              </li>
              @endif

              <li class="nav-item">
                <a href="{{ route('pdpagebannerIndex') }}" class="nav-link {{ Route::currentRouteNamed('pdpagebannerIndex') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Product Details') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('homeOneDeals','homeTwoDeals','homeThreeDeals') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('homeOneDeals','homeTwoDeals','homeThreeDeals') ? 'active':''}}">
              <i class="nav-icon fas fa-comment-dollar"></i>
              <p>
                {{ __('Deals') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (setting('theme') == 'all' || setting('theme') == 'one')
              <li class="nav-item">
                <a href="{{ route('homeOneDeals') }}" class="nav-link {{Route::currentRouteNamed('homeOneDeals') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home One') }}</p>
                </a>
              </li>
              @endif

              @if (setting('theme') == 'all' || setting('theme') == 'two')
              <li class="nav-item">
                <a href="{{ route('homeTwoDeals') }}" class="nav-link {{ Route::currentRouteNamed('homeTwoDeals') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home Two') }}</p>
                </a>
              </li>
              @endif

              @if (setting('theme') == 'all' || setting('theme') == 'three')
              <li class="nav-item">
                <a href="{{ route('homeThreeDeals') }}" class="nav-link {{ Route::currentRouteNamed('homeThreeDeals') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Home Three') }}</p>
                </a>
              </li>
              @endif

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('reviews') }}" class="nav-link {{ (Route::currentRouteNamed('reviews')) ? 'active' : '' }}">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                {{ __('Reviews') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('testimonial') }}" class="nav-link {{ (Route::currentRouteNamed('testimonial')) ? 'active' : '' }}">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                {{ __('Testimonial') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('sectionTitle') }}" class="nav-link {{ (Route::currentRouteNamed('sectionTitle')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-puzzle-piece"></i>
              <p>
                {{ __('Section Title') }}
              </p>
            </a>
          </li>
          @if (setting('theme') == 'all' || setting('theme') == 'one' || setting('theme') == 'three')
          <li class="nav-item">
            <a href="{{ route('slider') }}" class="nav-link {{ (Route::currentRouteNamed('slider','slider.edit')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                {{ __('Slider') }} <span class="badge badge-info right">{{ __('Home 1 & 3') }}</span>
              </p>
            </a>
          </li>
          @endif
          @if (setting('theme') == 'all' || setting('theme') == 'one')
          <li class="nav-item">
            <a href="{{ route('homeOneVideoGallery') }}" class="nav-link {{ (Route::currentRouteNamed('homeOneVideoGallery')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                {{ __('Video Gallery') }} <span class="badge badge-info right">{{ __('Home 1') }}</span>
              </p>
            </a>
          </li>
          @endif
          @if (setting('theme') == 'all' || setting('theme') == 'two')
          <li class="nav-item">
            <a href="{{ route('instagramPost') }}" class="nav-link {{ (Route::currentRouteNamed('instagramPost')) ? 'active' : '' }}">
              <i class="nav-icon fab fa-instagram"></i>
              <p>
                {{ __('Instagram Post') }} <span class="badge badge-info right">{{ __('Home 2') }}</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('htpolicy') }}" class="nav-link {{ (Route::currentRouteNamed('htpolicy')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-exchange-alt"></i>
              <p>
                {{ __('Policy Section') }} <span class="badge badge-info right">{{ __('Home 2') }}</span>
              </p>
            </a>
          </li>
          @endif
          @if (setting('theme') == 'all' || setting('theme') == 'three')
          <li class="nav-item">
            <a href="{{ route('h3bvideo') }}" class="nav-link {{ (Route::currentRouteNamed('h3bvideo')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-video"></i>
              <p>
                {{ __('Video Section') }} <span class="badge badge-info right">{{ __('Home 3') }}</span>
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ route('pg.index') }}" class="nav-link {{ (Route::currentRouteNamed('pg.index')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                {{ __('Payment Getway') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('partner') }}" class="nav-link {{ (Route::currentRouteNamed('partner')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                {{ __('Pertner') }}
              </p>
            </a>
          </li>
          @if (setting('theme') == 'all' || setting('theme') == 'one' || setting('theme') == 'three')
          <li class="nav-item">
            <a href="{{ route('appLinks') }}" class="nav-link {{ (Route::currentRouteNamed('appLinks')) ? 'active' : '' }}">
              <i class="nav-icon fab fa-app-store-ios"></i>
              <p>
                {{ __('App Download') }}
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item {{ Route::currentRouteNamed('faqs','faqs.add','aboutUsPage','contactUsPage') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('faqs','faqs.add','aboutUsPage','contactUsPage') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                {{ __('Pages') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contactUsPage')}}" class="nav-link {{ Route::currentRouteNamed('contactUsPage') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Contact Us') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('aboutUsPage')}}" class="nav-link {{ Route::currentRouteNamed('aboutUsPage') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('About Us') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('privacyPolicy.index') }}" class="nav-link {{ Route::currentRouteNamed('privacyPolicy.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Privacy Policy') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('termsConditon.index')}}" class="nav-link {{ Route::currentRouteNamed('termsConditon.index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Terms & Condition') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('faqs')}}" class="nav-link {{ Route::currentRouteNamed('faqs','faqs.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('FAQs') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">{{ __('SETTINGS') }}</li>
          <li class="nav-item">
            <a href="{{ route('inbox') }}" class="nav-link {{ Route::currentRouteNamed('inbox') ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                {{ __('Message') }}
                <span class="badge badge-info right">{{ unreadMessage() }}</span>
              </p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('emailConfig') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ Route::currentRouteNamed('emailConfig') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                {{ __('Email Configuration') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('emailConfig') }}" class="nav-link {{ Route::currentRouteNamed('emailConfig') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Setting') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('emailTemplate') }}" class="nav-link {{ Route::currentRouteNamed('emailTemplate') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Email Template') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('topbar','footerTop','footer') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ Route::currentRouteNamed('topbar','footerTop','footer') ? 'active' : '' }}">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                {{ __('Theme Option') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('topbar') }}" class="nav-link {{ Route::currentRouteNamed('topbar') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Topbar') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Route::currentRouteNamed('') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Menu') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('footerTop') }}" class="nav-link {{ Route::currentRouteNamed('footerTop') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Footer Top') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('footer') }}" class="nav-link {{ Route::currentRouteNamed('footer') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Footer') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('setting') }}" class="nav-link {{ Route::currentRouteNamed('setting') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                {{ __('Settings') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{-- <i class="nav-icon far fa-image"></i> --}}
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          {{-- Logout --}}
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
