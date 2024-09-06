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

    <li class="sidenav-item">
        <a href="typography.html" class="sidenav-link">
            <i class="sidenav-icon ion ion-md-quote"></i>
            <div>Typography</div>
        </a>
    </li>

    <!-- UI elements -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-md-cube"></i>
            <div>User inteface</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="ui_buttons.html" class="sidenav-link">
                    <div>Buttons</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_badges.html" class="sidenav-link">
                    <div>Badges</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_button-groups.html" class="sidenav-link">
                    <div>Button groups</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_dropdowns.html" class="sidenav-link">
                    <div>Dropdowns</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_navs.html" class="sidenav-link">
                    <div>Navs</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_pagination.html" class="sidenav-link">
                    <div>Pagination and breadcrumbs</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_progress.html" class="sidenav-link">
                    <div>Progress bars</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_list-groups.html" class="sidenav-link">
                    <div>List groups</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_notifications.html" class="sidenav-link">
                    <div>Notifications</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_modals.html" class="sidenav-link">
                    <div>Modals</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_tooltips.html" class="sidenav-link">
                    <div>Tooltips and popovers</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_thumbnails.html" class="sidenav-link">
                    <div>Thumbnails</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_cards.html" class="sidenav-link">
                    <div>Cards</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_accordion.html" class="sidenav-link">
                    <div>Accordion</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_app-brand.html" class="sidenav-link">
                    <div>App brand</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_navbar.html" class="sidenav-link">
                    <div>Navbar</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_sidenav.html" class="sidenav-link">
                    <div>Sidenav</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_footer.html" class="sidenav-link">
                    <div>Footer</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_carousel.html" class="sidenav-link">
                    <div>Carousel</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_lightbox.html" class="sidenav-link">
                    <div>Lightbox</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_drag-and-drop.html" class="sidenav-link">
                    <div>Drag&amp;Drop</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_treeview.html" class="sidenav-link">
                    <div>Treeview</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_media-player.html" class="sidenav-link">
                    <div>Plyr</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_cropper.html" class="sidenav-link">
                    <div>Cropper.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_tour.html" class="sidenav-link">
                    <div>Bootstrap tour</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="ui_fullcalendar.html" class="sidenav-link">
                    <div>Fullcalendar</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Forms -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-md-switch"></i>
            <div>Forms</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="forms_layouts.html" class="sidenav-link">
                    <div>Layouts and elements</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_controls.html" class="sidenav-link">
                    <div>Controls</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_custom-controls.html" class="sidenav-link">
                    <div>Custom controls</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_input-groups.html" class="sidenav-link">
                    <div>Input groups</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_switchers.html" class="sidenav-link">
                    <div>Switchers</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_sliders.html" class="sidenav-link">
                    <div>Sliders</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_selects.html" class="sidenav-link">
                    <div>Selects and tags</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_pickers.html" class="sidenav-link">
                    <div>Pickers</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_editors.html" class="sidenav-link">
                    <div>Editors</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_file-upload.html" class="sidenav-link">
                    <div>File upload</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_validation.html" class="sidenav-link">
                    <div>jQuery Validation</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_wizard.html" class="sidenav-link">
                    <div>SmartWizard</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_typeahead.html" class="sidenav-link">
                    <div>Typeahead</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_dual-listbox.html" class="sidenav-link">
                    <div>Bootstrap Dual Listbox</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="forms_extras.html" class="sidenav-link">
                    <div>Extras</div>
                </a>
            </li>
        </ul>
    </li>

    <!--  Tables -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-md-grid"></i>
            <div>Tables</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="tables_bootstrap.html" class="sidenav-link">
                    <div>Bootstrap</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="tables_datatables.html" class="sidenav-link">
                    <div>DataTables</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="tables_bootstrap-table.html" class="sidenav-link">
                    <div>Bootstrap table</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="tables_bootstrap-sortable.html" class="sidenav-link">
                    <div>Bootstrap Sortable</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Charts -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-md-pie"></i>
            <div>Charts</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="charts_gmaps.html" class="sidenav-link">
                    <div>GMaps</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_mapael.html" class="sidenav-link">
                    <div>Mapael</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_flot.html" class="sidenav-link">
                    <div>Flot.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_c3.html" class="sidenav-link">
                    <div>C3.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_chartist.html" class="sidenav-link">
                    <div>Chartist</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_chartjs.html" class="sidenav-link">
                    <div>Chart.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_morrisjs.html" class="sidenav-link">
                    <div>Morris.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="charts_sparkline.html" class="sidenav-link">
                    <div>Sparkline</div>
                </a>
            </li>
        </ul>
    </li>

    <!--  Icons -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-ios-heart"></i>
            <div>Icons</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="icons_font-awesome.html" class="sidenav-link">
                    <div>Font Awesome 5</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="icons_ionicons.html" class="sidenav-link">
                    <div>Ionicons</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="icons_linearicons.html" class="sidenav-link">
                    <div>Linearicons</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="icons_openiconic.html" class="sidenav-link">
                    <div>Open Iconic</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="icons_stroke7.html" class="sidenav-link">
                    <div>Stroke Icons 7</div>
                </a>
            </li>
        </ul>
    </li>

    <!--  Miscellaneous -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-ios-flask"></i>
            <div>Miscellaneous</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a href="misc_masonry.html" class="sidenav-link">
                    <div>Masonry</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_spinkit.html" class="sidenav-link">
                    <div>SpinKit</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_ladda.html" class="sidenav-link">
                    <div>Ladda</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_vegasjs.html" class="sidenav-link">
                    <div>Vegas.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_numeraljs.html" class="sidenav-link">
                    <div>Numeral.js</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_blockui.html" class="sidenav-link">
                    <div>BlockUI</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_idle-timer.html" class="sidenav-link">
                    <div>Idle Timer</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_perfect-scrollbar.html" class="sidenav-link">
                    <div>Perfect Scrollbar</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="misc_clipboardjs.html" class="sidenav-link">
                    <div>Clipboard.js</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="sidenav-divider mb-1"></li>
    <li class="sidenav-header small font-weight-semibold">EXTRAS</li>

    <!-- Pages -->
    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-md-document"></i>
            <div>Pages</div>
            <div class="pl-1 ml-auto">
                <div class="badge badge-primary">59</div>
            </div>
        </a>
        <ul class="sidenav-menu">

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Articles</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_articles_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_articles_edit.html" class="sidenav-link">
                            <div>Edit</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Authentication</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v1.html" class="sidenav-link">
                            <div>Login v1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v1.html" class="sidenav-link">
                            <div>Register v1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v2.html" class="sidenav-link">
                            <div>Login v2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v2.html" class="sidenav-link">
                            <div>Register v2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v3.html" class="sidenav-link">
                            <div>Login v3</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v3.html" class="sidenav-link">
                            <div>Register v3</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-and-register.html" class="sidenav-link">
                            <div>Login + Register</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_lock-screen-v1.html" class="sidenav-link">
                            <div>Lock screen v1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_lock-screen-v2.html" class="sidenav-link">
                            <div>Lock screen v2</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_password-reset.html" class="sidenav-link">
                            <div>Password reset</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_email-confirm.html" class="sidenav-link">
                            <div>Email confirm</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Education</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_education_courses-v1.html" class="sidenav-link">
                            <div>Courses v1</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_education_courses-v2.html" class="sidenav-link">
                            <div>Courses v2</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>E-commerce</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_e-commerce_product-list.html" class="sidenav-link">
                            <div>Product list</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_e-commerce_product-item.html" class="sidenav-link">
                            <div>Product item</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_e-commerce_product-edit.html" class="sidenav-link">
                            <div>Product edit</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_e-commerce_order-list.html" class="sidenav-link">
                            <div>Order list</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_e-commerce_order-detail.html" class="sidenav-link">
                            <div>Order detail</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Forums</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_forums_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_forums_threads.html" class="sidenav-link">
                            <div>Threads</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_forums_discussion.html" class="sidenav-link">
                            <div>Discussion</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Messages v1</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_messages_v1_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v1_item.html" class="sidenav-link">
                            <div>Item</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v1_compose.html" class="sidenav-link">
                            <div>Compose</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Messages v2</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_messages_v2_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v2_item.html" class="sidenav-link">
                            <div>Item</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v2_compose.html" class="sidenav-link">
                            <div>Compose</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Messages v3</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_messages_v3_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v3_item.html" class="sidenav-link">
                            <div>Item</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_messages_v3_compose.html" class="sidenav-link">
                            <div>Compose</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Projects</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_projects_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_projects_item.html" class="sidenav-link">
                            <div>Item</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Tickets</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_tickets_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_tickets_edit.html" class="sidenav-link">
                            <div>Edit</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
                    <div>Users</div>
                </a>

                <ul class="sidenav-menu">
                    <li class="sidenav-item">
                        <a href="pages_users_list.html" class="sidenav-link">
                            <div>List</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_users_view.html" class="sidenav-link">
                            <div>View</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_users_edit.html" class="sidenav-link">
                            <div>Edit</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidenav-item">
                <a href="pages_account-settings.html" class="sidenav-link">
                    <div>Account settings</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_chat.html" class="sidenav-link">
                    <div>Chat</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_clients.html" class="sidenav-link">
                    <div>Clients</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_contacts.html" class="sidenav-link">
                    <div>Contacts</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_faq.html" class="sidenav-link">
                    <div>FAQ</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_file-manager.html" class="sidenav-link">
                    <div>File manager</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_gallery.html" class="sidenav-link">
                    <div>Gallery</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_help-center.html" class="sidenav-link">
                    <div>Help center</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_invoice.html" class="sidenav-link">
                    <div>Invoice</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_kanban-board.html" class="sidenav-link">
                    <div>Kanban board</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_pricing.html" class="sidenav-link">
                    <div>Pricing</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_profile-v1.html" class="sidenav-link">
                    <div>Profile v1</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_profile-v2.html" class="sidenav-link">
                    <div>Profile v2</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_search-results.html" class="sidenav-link">
                    <div>Search results</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_task-list.html" class="sidenav-link">
                    <div>Task list</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_teams.html" class="sidenav-link">
                    <div>Teams</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_vacancies.html" class="sidenav-link">
                    <div>Vacancies</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a href="pages_voting.html" class="sidenav-link">
                    <div>Voting</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
            <i class="sidenav-icon ion ion-logo-buffer"></i>
            <div>Complete UI</div>
        </a>

        <ul class="sidenav-menu">
            <li class="sidenav-item">
                <a target="_blank" href="complete-ui_base.html" class="sidenav-link">
                    <div>Base</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a target="_blank" href="complete-ui_plugins.html" class="sidenav-link">
                    <div>Plugins</div>
                </a>
            </li>
            <li class="sidenav-item">
                <a target="_blank" href="complete-ui_charts.html" class="sidenav-link">
                    <div>Charts</div>
                </a>
            </li>
        </ul>
    </li>

</ul>
