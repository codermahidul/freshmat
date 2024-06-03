 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Freshmat Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{ Route::currentRouteNamed('home') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item {{ (Route::currentRouteNamed('productadd','productedit','products','productCategory','productCategoryAdd','coupon','couponadd','delivery.location','delivery.edit','delivery.add','productcategoryedit')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Route::currentRouteNamed('productadd','products','productCategory','productCategoryAdd','coupon','couponadd','delivery.location')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                eCommerce
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('productadd') }}" class="nav-link {{ (Route::currentRouteNamed('productadd')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('products') }}" class="nav-link {{ (Route::currentRouteNamed('products','productedit')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('productCategory') }}" class="nav-link {{ (Route::currentRouteNamed('productCategory','productCategoryAdd','productcategoryedit')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('coupon') }}" class="nav-link {{ (Route::currentRouteNamed('coupon','couponadd')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delivery.location') }}" class="nav-link {{ (Route::currentRouteNamed('delivery.location','delivery.edit','delivery.add')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('category.edit','blog','blog.add','category','category.add','category.insert','comments') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('blog','blog.add','category','category.add','category.insert','comments') ? 'active':''}}">
              <i class="nav-icon fas fa-pen-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blog.add')}}" class="nav-link {{Route::currentRouteNamed('blog.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blog') }}" class="nav-link {{ Route::currentRouteNamed('blog') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category')}}" class="nav-link {{ Route::currentRouteNamed('category','category.add','category.edit') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{route('comments')}}" class="nav-link {{ Route::currentRouteNamed('comments') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('homeonebanner')}}" class="nav-link {{ (Route::currentRouteNamed('homeonebanner')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                Banners
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('slider') }}" class="nav-link {{ (Route::currentRouteNamed('slider','slider.edit')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('testimonial') }}" class="nav-link {{ (Route::currentRouteNamed('testimonial')) ? 'active' : '' }}">
              <i class="nav-icon far fa-comment-dots"></i>
              <p>
                Testimonial
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('homeOneVideoGallery') }}" class="nav-link {{ (Route::currentRouteNamed('homeOneVideoGallery')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Video Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('partner') }}" class="nav-link {{ (Route::currentRouteNamed('partner')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Pertner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appLinks') }}" class="nav-link {{ (Route::currentRouteNamed('appLinks')) ? 'active' : '' }}">
              <i class="nav-icon fab fa-app-store-ios"></i>
              <p>
                App Download
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('sectionTitle') }}" class="nav-link {{ (Route::currentRouteNamed('sectionTitle')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-puzzle-piece"></i>
              <p>
                Section Title
              </p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('faqs','faqs.add','aboutUsPage','contactUsPage') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Route::currentRouteNamed('faqs','faqs.add','aboutUsPage','contactUsPage') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contactUsPage')}}" class="nav-link {{ Route::currentRouteNamed('contactUsPage') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('aboutUsPage')}}" class="nav-link {{ Route::currentRouteNamed('aboutUsPage') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('faqs')}}" class="nav-link {{ Route::currentRouteNamed('faqs','faqs.add') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="{{ route('inbox') }}" class="nav-link {{ Route::currentRouteNamed('inbox') ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Message
                <span class="badge badge-info right">{{ unreadMessage() }}</span>
              </p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('emailConfig') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ Route::currentRouteNamed('emailConfig') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Email Configuration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('emailConfig') }}" class="nav-link {{ Route::currentRouteNamed('emailConfig') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Route::currentRouteNamed('') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Template</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('topbar') ? 'menu-open' : '' }}">
            <a href="" class="nav-link {{ Route::currentRouteNamed('topbar') ? 'active' : '' }}">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Theme Option
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('topbar') }}" class="nav-link {{ Route::currentRouteNamed('topbar') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link {{ Route::currentRouteNamed('') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('setting') }}" class="nav-link {{ Route::currentRouteNamed('setting') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{-- <i class="nav-icon far fa-image"></i> --}}
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
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