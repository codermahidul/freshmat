{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('Admin Login') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset(setting('logo')) }}" alt="logo">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <span class="text-danger">{{ $message }}</span>
      @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-1">
        <a href="forgot-password.html">{{ __('I forgot my password') }}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html> --}}


<!DOCTYPE html>

<html lang="en" class="default-style">

<head>
  <title>{{ __('Admin Login') }}</title>

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
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/pages/authentication.css">
</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Content -->

  <div class="authentication-wrapper authentication-1 px-4">
    <div class="authentication-inner py-5">

      <!-- Logo -->
      <div class="d-flex justify-content-center align-items-center">
        <div class="">
          <div class="w-100 position-relative">
            <a href="{{ route('home') }}">
                <img src="{{ asset(setting('logo')) }}" alt="logo">
            </a>
          </div>
        </div>
      </div>
      <!-- / Logo -->

      <!-- Form -->
      <form class="my-5" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label class="form-label">{{ __('Email') }}</label>
          <input type="text" class="form-control" name="email" value="{{ old('email') }}">
          @error('email')
          <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
          <label class="form-label d-flex justify-content-between align-items-end">
            <div>Password</div>
            <a href="javascript:void(0)" class="d-block small">{{ __('Forgot password?') }}</a>
          </label>
          <input type="password" class="form-control" name="password">
          @error('password')
          <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-between align-items-center m-0">
          <label class="custom-control custom-checkbox m-0">
            <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="custom-control-label">{{ __('Remember me') }}</span>
          </label>
          <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
        </div>
      </form>
      <!-- / Form -->
    </div>
  </div>

  <!-- / Content -->

  <!-- Core scripts -->
  <script src="{{ asset('backend') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('backend') }}/assets/vendor/js/sidenav.js"></script>

  <!-- Libs -->
  <script src="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <!-- Demo -->
  <script src="{{ asset('backend') }}/assets/js/demo.js"></script>

</body>

</html>
