<!DOCTYPE html>

<html lang="en" class="default-style">

<head>
<title>@yield('title')</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/fontawesome.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/ionicons.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/linearicons.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/open-iconic.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/pe-icon-7-stroke.css">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/bootstrap.css" class="theme-settings-bootstrap-css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/qadmin.css" class="theme-settings-qadmin-css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/theme-corporate.css" class="theme-settings-theme-css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/colors.css" class="theme-settings-colors-css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/rtl/uikit.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/demo.css">

  <script src="{{ asset('backend') }}/assets/vendor/js/material-ripple.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/js/layout-helpers.js"></script>

  <!-- Theme settings -->
  <!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->
  <script src="{{ asset('backend') }}/assets/vendor/js/theme-settings.js"></script>
  <script>
    window.themeSettings = new ThemeSettings({
      cssPath: {{ asset('backend') }}'/assets/vendor/css/rtl/',
      themesPath: {{ asset('backend') }}'/assets/vendor/css/rtl/'
    });
  </script>

  <!-- Core scripts -->
  <script src="{{ asset('backend') }}/assets/vendor/js/pace.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Libs -->
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/datatables/datatables.css">

</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
      <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <div class="app-brand demo">
          <span class="app-brand-logo demo bg-primary">
            <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
          </span>
          <a href="{{ route('home') }}" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Aprox</a>
          <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
          </a>
        </div>

        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        @include('components.dashboard.leftSidebar')
      </div>
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

          <!-- Brand demo (see assets/css/demo/demo.css) -->
          <a href="{{ route('home') }}" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
            <span class="app-brand-logo demo bg-primary">
              <svg viewBox="0 0 148 80" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="46.49" x2="62.46" y1="53.39" y2="48.2" gradientUnits="userSpaceOnUse"><stop stop-opacity=".25" offset="0"></stop><stop stop-opacity=".1" offset=".3"></stop><stop stop-opacity="0" offset=".9"></stop></linearGradient><linearGradient id="e" x1="76.9" x2="92.64" y1="26.38" y2="31.49" xlink:href="#a"></linearGradient><linearGradient id="d" x1="107.12" x2="122.74" y1="53.41" y2="48.33" xlink:href="#a"></linearGradient></defs><path style="fill: #fff;" transform="translate(-.1)" d="M121.36,0,104.42,45.08,88.71,3.28A5.09,5.09,0,0,0,83.93,0H64.27A5.09,5.09,0,0,0,59.5,3.28L43.79,45.08,26.85,0H.1L29.43,76.74A5.09,5.09,0,0,0,34.19,80H53.39a5.09,5.09,0,0,0,4.77-3.26L74.1,35l16,41.74A5.09,5.09,0,0,0,94.82,80h18.95a5.09,5.09,0,0,0,4.76-3.24L148.1,0Z"></path><path transform="translate(-.1)" d="M52.19,22.73l-8.4,22.35L56.51,78.94a5,5,0,0,0,1.64-2.19l7.34-19.2Z" fill="url(#a)"></path><path transform="translate(-.1)" d="M95.73,22l-7-18.69a5,5,0,0,0-1.64-2.21L74.1,35l8.33,21.79Z" fill="url(#e)"></path><path transform="translate(-.1)" d="M112.73,23l-8.31,22.12,12.66,33.7a5,5,0,0,0,1.45-2l7.3-18.93Z" fill="url(#d)"></path></svg>
            </span>
            <span class="app-brand-text demo font-weight-normal ml-2">qadmin</span>
          </a>

          <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
          <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
            <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
              <i class="ion ion-md-menu text-large align-middle"></i>
            </a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="layout-navbar-collapse">
            <!-- Divider -->
            <hr class="d-lg-none w-100 my-2">

            <div class="navbar-nav align-items-lg-center">
              <!-- Search -->
              <label class="nav-item navbar-text navbar-search-box p-0 active">
                <i class="ion ion-ios-search navbar-icon align-middle"></i>
                <span class="navbar-search-input pl-2">
                  <input type="text" class="form-control navbar-text mx-2" placeholder="Search..." style="width:200px">
                </span>
              </label>
            </div>

            <div class="navbar-nav align-items-lg-center ml-auto">
              <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                  <i class="ion ion-md-notifications-outline navbar-icon align-middle"></i>
                  <span class="badge badge-primary badge-dot indicator"></span>
                  <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="bg-primary text-center text-white font-weight-bold p-3">
                    4 New Notifications
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-home bg-secondary border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-dark">Login from 192.168.1.1</div>
                        <div class="text-light small mt-1">
                          Aliquam ex eros, imperdiet vulputate hendrerit et.
                        </div>
                        <div class="text-light small mt-1">12h ago</div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-person-add bg-info border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-dark">You have
                          <strong>4</strong> new followers</div>
                        <div class="text-light small mt-1">
                          Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-power bg-danger border-0 text-white"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-dark">Server restarted</div>
                        <div class="text-light small mt-1">
                          19h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <div class="ui-icon ui-icon-sm ion ion-md-warning bg-warning border-0 text-dark"></div>
                      <div class="media-body line-height-condenced ml-3">
                        <div class="text-dark">99% server load</div>
                        <div class="text-light small mt-1">
                          Etiam nec fringilla magna. Donec mi metus.
                        </div>
                        <div class="text-light small mt-1">
                          20h ago
                        </div>
                      </div>
                    </a>
                  </div>

                  <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                </div>
              </div>

              <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                  <i class="ion ion-ios-mail navbar-icon align-middle"></i>
                  <span class="badge badge-primary badge-dot indicator"></span>
                  <span class="d-lg-none align-middle">&nbsp; Messages</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="bg-primary text-center text-white font-weight-bold p-3">
                    4 New Messages
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('backend') }}/assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-dark line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                        <div class="text-light small mt-1">
                          Mae Gibson &nbsp;·&nbsp; 58m ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('backend') }}/assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-dark line-height-condenced">Mea et legere fuisset, ius amet purto luptatum te.</div>
                        <div class="text-light small mt-1">
                          Kenneth Frazier &nbsp;·&nbsp; 1h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('backend') }}/assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-dark line-height-condenced">Sit meis deleniti eu, pri vidit meliore docendi ut.</div>
                        <div class="text-light small mt-1">
                          Nelle Maxwell &nbsp;·&nbsp; 2h ago
                        </div>
                      </div>
                    </a>

                    <a href="javascript:void(0)" class="list-group-item list-group-item-action media d-flex align-items-center">
                      <img src="{{ asset('backend') }}/assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                      <div class="media-body ml-3">
                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.</div>
                        <div class="text-light small mt-1">
                          Belle Ross &nbsp;·&nbsp; 5h ago
                        </div>
                      </div>
                    </a>
                  </div>

                  <a href="javascript:void(0)" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                </div>
              </div>

              <!-- Divider -->
              <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>

              <div class="demo-navbar-user nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                  <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                    <img src="{{ asset(Auth::user()->userProfile->photo) }}" alt class="d-block ui-w-30 rounded-circle">
                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Auth::user()->name }}</span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="{{ route('adminProfile') }}" class="dropdown-item">
                    <i class="ion ion-ios-person text-lightest"></i> &nbsp; {{ __('My profile') }}</a>
                  <a href="{{ route('inbox') }}" class="dropdown-item">
                    <i class="ion ion-ios-mail text-lightest"></i> &nbsp; {{ __('Message') }}</a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    <i class="ion ion-md-settings text-lightest"></i> &nbsp; Account settings</a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                    <i class="ion ion-ios-log-out text-danger"></i> &nbsp; {{ __('Log Out') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          @yield('content')
          <!-- / Content -->

          @include('components.dashboard.footer')

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  <script src="{{ asset('backend') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/js/sidenav.js"></script>

  <!-- Libs -->
  <script src="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/libs/chartjs/chartjs.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/libs/datatables/datatables.js"></script>


  <!-- Demo -->
  <script src="{{ asset('backend') }}/assets/js/demo.js"></script>
  <script src="{{ asset('backend') }}/assets/js/dashboards_dashboard-3.js"></script>
  @include('sweetalert::alert')
    @stack('scripts')
    <script>
        $(document).ready(function() {
            //ajax setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //data table

            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": true,
                    "buttons": ["excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": true,
                    "responsive": true,
                });
            });
        })
    </script>
</body>

</html>
