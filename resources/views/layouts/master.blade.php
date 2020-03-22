<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="format-detection" content="telephone=no" />
      <link rel="shortcut icon" href="/img/favicon.png"/>
      <meta name="yandex-verification" content="5bc2db0ab51a1a3e" />
      <title>Ticklers Food - @yield('title')</title>
      <style id="dynamic-css"></style>
      <style type="text/css">
         .preloader {position: fixed;left: 0;top: 0;width: 100%;height: 100%;background: #fff;text-align: center;z-index: 6001; }
         .preloader:after { content: ""; height: 100%; display: inline-block; vertical-align: middle; }
         .sk-cube-grid {width: 3.857rem;height: 3.857rem;margin: 0 auto;vertical-align: middle;display: inline-block; }
         .sk-cube-grid .sk-cube {width: 33%;height: 33%;background-color: #333;float: left;-webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; }
         .sk-cube-grid .sk-cube1 {
         -webkit-animation-delay: 0.2s;
         animation-delay: 0.2s; }
         .sk-cube-grid .sk-cube2 {
         -webkit-animation-delay: 0.3s;
         animation-delay: 0.3s; }
         .sk-cube-grid .sk-cube3 {
         -webkit-animation-delay: 0.4s;
         animation-delay: 0.4s; }
         .sk-cube-grid .sk-cube4 {
         -webkit-animation-delay: 0.1s;
         animation-delay: 0.1s; }
         .sk-cube-grid .sk-cube5 {
         -webkit-animation-delay: 0.2s;
         animation-delay: 0.2s; }
         .sk-cube-grid .sk-cube6 {
         -webkit-animation-delay: 0.3s;
         animation-delay: 0.3s; }
         .sk-cube-grid .sk-cube7 {
         -webkit-animation-delay: 0s;
         animation-delay: 0s; }
         .sk-cube-grid .sk-cube8 {
         -webkit-animation-delay: 0.1s;
         animation-delay: 0.1s; }
         .sk-cube-grid .sk-cube9 {
         -webkit-animation-delay: 0.2s;
         animation-delay: 0.2s; }
         @-webkit-keyframes sk-cubeGridScaleDelay {
         0%, 70%, 100% {
         -webkit-transform: scale3D(1, 1, 1);
         transform: scale3D(1, 1, 1); }
         35% {
         -webkit-transform: scale3D(0, 0, 1);
         transform: scale3D(0, 0, 1); } }
         @keyframes sk-cubeGridScaleDelay {
         0%, 70%, 100% {
         -webkit-transform: scale3D(1, 1, 1);
         transform: scale3D(1, 1, 1); }
         35% {
         -webkit-transform: scale3D(0, 0, 1);
         transform: scale3D(0, 0, 1); } }
      </style>
      @yield('styles')
   </head>
   <body class="page-color-style-4  page-style-4">
      <div class="preloader">
         <div class="sk-cube-grid selected">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
         </div>
      </div>
      @include('partials.header')

      @yield('content')

      @include('partials.footer')

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
      <link href="/css/style.css" rel="stylesheet" type="text/css"/>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
      <script src="/js/jquery-ui.min.js"></script>
      <script src="/js/jscolor.min.js"></script>
      <script src="/js/jquery.knob.js"></script>
      <script src="/js/jquery.throttle.js"></script>
      <script src="/js/jarallax.js"></script>
      <script src="/js/all.js"></script>
      <script src="/js/color.picker.js"></script>
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5bbdf9fbd0457469185607b0/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->
      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc080dcb6192b67"></script>
      @yield('scripts')
   </body>
</html>
