<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Student Dashboard</title>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <script defer src="{{ asset('template-assets/assets/plugins/fontawesome/js/all.min.js') }}"></script>
    <link id="theme-style" rel="stylesheet" href="{{ asset('template-assets/assets/css/portal.css') }}">
</head> 

<body class="app">   	
  @include('student.header.index')
    
  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      @include('student.title.index')
      <div class="content">
        @yield('content')
      </div>
    </div>
  </div> 					
      
  <script src="{{ asset('template-assets/assets/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('template-assets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  
  <script src="{{ asset('template-assets/assets/plugins/chart.js/chart.min.js') }}"></script> 
  <script src="{{ asset('template-assets/assets/js/index-charts.js') }}"></script> 
  <script src="{{ asset('template-assets/assets/js/app.js') }}"></script> 
</body>
</html> 

