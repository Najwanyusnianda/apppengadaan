<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>App - Pengadaan</title>
  
 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <!--<link rel="stylesheet" href="{{ asset('css/css/coreui.min.css') }}">-->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show ">
   <div id="app">  

        <!--navbar-->
        @include('layouts._adminApp_nav')
        <div class="app-body">
            <!--sidebar-->
            @include('layouts._adminApp_sidebar')
            <main class="main">
                <!--breadcrumb-->
                @include('layouts._breadcrumb')
                  <!--main CONTENT-->
                <div class="container-fluid">
                    <div class="ui-view">
                            <div class="animated fadeIn">
                                    <router-view></router-view>
                             
                            </div>
                    </div>

                </div>
                 <!--end MAIN CONTENT-->
            </main>

            @include('layouts._aside')
        </div>
    </div>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>

</html>