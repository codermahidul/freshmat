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
