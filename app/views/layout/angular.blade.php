<!doctype html>
<html ng-app="myApp">
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"  media="screen,projection"/>

      <script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-animate/angular-animate.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-scroll/angular-scroll.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/myapp.js') }}"></script>
    </head>
    
    <body>

    @include('layout.nav')
    @yield('content')
    @include('layout.footer')
    <!--Import jQuery before materialize.js-->

      <script type="text/javascript" src="{{ URL::asset('bower_components/jquery/dist/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/materialize.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/sideNav.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/parallax.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/waves.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/tabs.js') }}"></script>

      <script type="text/javascript" src="{{ URL::asset('js/scripts/myscripts.js') }}"></script>
    </body>
  </html>
  