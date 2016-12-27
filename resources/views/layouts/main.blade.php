<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{{trans('layout.title')}}</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="/vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="/css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/css/extralayers.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="/vendor/revslider/css/settings.css" media="screen" />

    <!-- GOOGLE FONTS FOR REVOLUTION SLIDER ONLY -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,700,800,900' rel='stylesheet' type='text/css' />
<!-- Color Style -->
<link href="/colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="/js/modernizr.js"></script><!-- Modernizr -->
</head>
<body class="home header-style1">

    <div class="body">
        @include('layouts.parts._tolbar')
        @include('layouts.parts._nav')
            @yield('content')       
        @include('layouts.parts._footer1')
        @include('layouts.parts._footer2')
        <a id="back-to-top" style="z-index: 100;"><i class="fa fa-chevron-up"></i></a> 
    </div>
<script src="/js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="/js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="/js/bootstrap.js"></script> <!-- UI -->
<script src="/js/init.js"></script> <!-- All Scripts -->
<script src="/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
  
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="/vendor/revslider/js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="/vendor/revslider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/yepnope/dist/yepnope-2.0.0.js"></script>
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        jQuery('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:9000,
            startwidth:1060,
            startheight:500,
            hideThumbs:200,
            
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview2",
            
            touchenabled:"on",
            onHoverStop:"on",
            
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
                                    
                                    
            keyboardNavigation:"on",
            
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
                    
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner0",
            
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",
            
            autoHeight:"off",                       
            forceFullWidth:"off",                       
                                    
                                    
                                    
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,                      
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
        });   

    }); //ready
</script>
<script src="/js/custom.js"></script> <!-- All Scripts -->
</body>
</html>
