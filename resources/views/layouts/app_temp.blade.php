<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
.wrapper {
  min-height: 100%;
  min-width: 100%;
}
</style>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show  ">
    <div id="app" class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
      <app></app>               
    </div>
</body>
</html>
