<!DOCTYPE html>
<html>
    @include('layouts.partials._css')
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    @yield('content')
    <!-- Essential javascripts for application to work-->
    @include('layouts.partials._js')
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>
