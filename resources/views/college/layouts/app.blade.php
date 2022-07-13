<!DOCTYPE html>
<html lang="en">
<head>
    <title>College Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <script defer src="{{ asset('template-assets/assets/plugins/fontawesome/js/all.min.js') }}"></script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('template-assets/assets/css/portal.css') }}">
    <link rel="stylesheet" href="{{ asset('template-assets/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/waitMe.min.css') }}">
</head>

<body class="app">
  @include('college.header.index')

  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      @include('college.title.index')
      <div class="content">
        @yield('content')
      </div>
    </div>
  </div>
  <?php
    $user = Auth::user();
    $token =  $user->createToken('token')->plainTextToken;
  ?>
  <script>
    const APP_URL = {!! json_encode(url('/').'/api/v1/') !!}
    const token =  '{{ $token }}'
  </script>
  <script src="{{ asset('template-assets/assets/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('template-assets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/waitMe.min.js') }}"></script>
  @yield('custom-js')
</body>
</html>

