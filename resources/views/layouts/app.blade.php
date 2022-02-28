<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials._css')
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('layouts.partials._header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('layouts.partials._sidebar')

    @yield('content')

    @include('layouts.partials._js')
  </body>
</html>
