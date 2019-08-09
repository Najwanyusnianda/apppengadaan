<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- <link rel="stylesheet" href="{{asset('vendor/argon-dashboard-free/assets/css/argon-dashboard.css')}}">
   -->
   <style>
   .footer {

  
}
   </style>
</head>
<body class="">

    @include('layouts._adminApp_sidebar')
  <div class="main-content">
     <!-- Top navigation -->
    @include('layouts._adminApp_nav')
    <!-- End Top navigation -->
      <!-- Header -->
      <div class="header bg-gradient-default pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
          <div class="header-body">
  
            @yield('header_content')
          </div>
        </div>
    </div>
      <!-- End Header -->

    <!--Content  -->
    @yield('content')
    <!-- End Content -->

      <!-- Footer -->
      <footer class="footer">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                © 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      <!-- End Footer -->
  </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
</body>

</html>