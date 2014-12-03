<!doctype html>
<html ng-app="myApp">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <!--Import materialize.css-->
      <!-- Favicons -->
      <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png"/>
      <meta name="msapplication-TileColor" content="#FFFFFF"/>
      <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"/>
      <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32"/>
      <!--  Android 5 Chrome Color -->
      <meta name="theme-color" content="#EE6E73"/>
    
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('bin/materialize.css') }}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/ghpages-materialize.css') }}"  media="screen,projection"/>

      
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular/angular.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-route/angular-route.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-animate/angular-animate.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-scroll/angular-scroll.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bower_components/angular-morph/dist/angular-morph.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/app/myapp.gen.js') }}"></script>
    </head>
    
    <body>

    @include('layout.nav')
    @yield('content')
    @include('layout.footer')
    <!--Import jQuery before materialize.js-->

      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>     
      <script type="text/javascript" src="{{ URL::asset('js/jquery.timeago.js') }}"></script> 
      <script type="text/javascript" src="{{ URL::asset('js/prism.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('bin/materialize.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/init.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/scripts/myscripts.js') }}"></script>      
    </body>
  </html>
  