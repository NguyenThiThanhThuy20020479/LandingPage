<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Landing Page</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="img/2.png" type="image/png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/LineIcons.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
        <link rel="stylesheet" href="assets/css/main.css">    
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>
    <body>

        <x-header/>

        @include('sections.section_service')
        @include('sections.section_plan')
        @include('sections.section_features')
        @include('sections.section_team')
        @include('sections.section_blog')
        @include('sections.section_contact')
        
        <x-footer/>
    
    
        <!-- Go To Top Link -->
        <a href="#" class="back-to-top">
          <i class="lni-chevron-up"></i>
        </a> 
    
        <!-- Preloader -->
        <div id="preloader">
          <div class="loader" id="loader-1"></div>
        </div>
        <!-- End Preloader -->
    
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.js"></script>      
        <script src="assets/js/jquery.nav.js"></script>    
        <script src="assets/js/scrolling-nav.js"></script>    
        <script src="assets/js/jquery.easing.min.js"></script>     
        <script src="assets/js/nivo-lightbox.js"></script>     
        <script src="assets/js/jquery.magnific-popup.min.js"></script>      
        <script src="assets/js/main.js"></script>
        
      </body>
</html>
