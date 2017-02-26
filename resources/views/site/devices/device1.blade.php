<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vestige - Responsive HTML5 Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
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
<!-- Color Style -->
<link href="/colors/color1.css" rel="stylesheet" type="text/css">
<link href="/FlexSlider/flexslider.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
</head>
<body class="header-style1">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
<style>
    body{
        background: url('/images/Background.jpg') 50% 50% no-repeat;
        background-size: cover;
    }
    .big_title_main{
        background: url('/images/btn2.png') 50% 50% no-repeat;
        background-size: cover;
        line-height: 120px;
        text-align: center;
        height: 120px;
        color: #ede2c6;
        font-size: 32px;
        text-shadow: 0 0 10px #333;
        box-shadow: 0 0 20px #333;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        font-weight: bold;
        font-size: 40px;
    }
    .nav-pills>li+li{
        margin-left: 10px;
    }
    .main div#container{
        padding: 0;
        margin: 0;
    }
    body,
    .main,
    .content,
    .content > div,
    .container,
    .tab-content,
    .tab-pane,
    .modal-content,
    .modal-body{
        height: 100% !important;
    }
    .tab-content{
        padding: 0;
        background-color: transparent;
        border: none;
    }
    .content{
        padding: 0;
    }
    .hero-area{
        height: 195px;
        min-height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }
    .main{
        padding-top: 270px;
    }
    #content_2d > .container{
        display: flex;
        align-items: center;
        height: 100%;
        justify-content: center;
        flex-flow: column wrap;
    }
    #content_2d > .container .flex_img{
        width: 33%;
        padding: 10px;
        border: 4px solid #fff;
        display: block;
        margin-right: 20px;
        border-radius: 20px;
        /* margin-bottom: 150px; */
        cursor: pointer;
        position: relative;
        height: 45%;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    #content_2d > .container .flex_img:last-child{
        margin-right: 0px;
    }
    .full-width-img{
        width: auto;
        max-width: 100%;
        height: 100%;
        display: block;
        margin: 0 auto;
    }/* 
    .flex_img:before{
        content: "\f06e";
        font: normal normal normal 14px/1 FontAwesome;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -30px;
        margin-top: -30px;
        font-size: 60px;
        opacity: .5;
        text-shadow: 0 0 10px #000;
        color: #fff;
    }  */
    .carousel-control.right,
    .carousel-control.left{
        background: transparent;
    }
    .item{
        padding: 0 50px;
        text-align: center;
    }
    .item img{
        margin: 0 auto;
        max-width: 100%;
    }
    .carousel-inner{
        margin-top: 10%;
    }
    .device_buttom{
        background: url('/images/btn.png') 50% 50% no-repeat;
        background-size: cover;
        margin-top: 20px;
        width: 100%;
        display: block;
        border-radius:  10px;        
        box-shadow: 0 0 20px #333;
        height: 100px;
        line-height: 100px;
        color: #ede2c6 !important;
    }
    .device_buttom:hover{
        color: #ede2c6;
    }
    .device_buttom:visited{
        color: #ede2c6;
    }
</style>


<!--         <div class="page-header">
    <div style="height: auto">
        <div style="vertical-align: top">
            <span style="margin-top: 30px; color: #222; background-color: #eee; border-radius: 4px; padding: 15px ">Планшет в холле</span>
            <div class="grid-filter" style="margin: 30px">
                <ul class="nav nav-pills sort-source" data-sort-id="gallery" data-option-key="filter">
                    <li data-option-value="*" class="active"><a href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-map-o"></i> <span>Схема музея</span></a></li>
                    <li data-option-value=".format-image"><a href="#3d" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i> <span>3D тур</span></a></li>
                    <li data-option-value=".format-link"><a href="#some_slide" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-link"></i> <span>Слайдер</span></a></li>
<li data-option-value=".format-gallery"><a href="#"><i class="fa fa-camera"></i> <span>Sliders</span></a></li>
<li data-option-value=".format-video"><a href="#"><i class="fa fa-play"></i> <span>Videos</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->


    <div class="container-fluid big_title_main">
        МУЗЕЙ МИНИСТЕРСТВА ВНУТРЕННИХ ДЕЛ РЕСПУБЛИКИ БЕЛАРУСЬ
     <div class="container-fluid text-center"> 
        <div class="col-sm-4 ">     
            <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>ПЛАНЫ РАСПОЛОЖЕНИЯ ЗАЛОВ</span></a>
        </div>
        <div class="col-sm-4 ">
            <a class="device_buttom" href="#some_slide" aria-controls="profile" role="tab" data-toggle="tab"> <span>ФОТОИСТОРИЯ МИЛИЦИИ</span></a></li>
        </div>
        <div class="col-sm-4 ">
            <a class="device_buttom" href="#3d" aria-controls="profile" role="tab" data-toggle="tab"> <span>ВИРТУАЛЬНЫЙ ТУР</span></a>
        </div>
     </div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="content_2d">
                    <div class="container">
                        <div class="flex_img">                            
                            <img src="/images/device1/Холл.jpg" alt="" class="show-more" data-src="/images/device1/Холл.jpg">
                        </div>
                        <div class="flex_img">                            
                            <img src="/images/device1/1 этаж.jpg" alt="" class="show-more" data-src="/images/device1/1 этаж.jpg" style="height: 84%;">
                        </div>
                        <div class="flex_img">                            
                            <img src="/images/device1/2 этаж.png" alt="" class="show-more" data-src="/images/device1/2 этаж.png">
                        </div>
                        <div class="flex_img">                            
                            <img src="/images/device1/PhysCamera034(-potolok).jpg" alt="" class="show-more" data-src="/images/device1/PhysCamera034(-potolok).jpg">
                        </div>
                        <div class="flex_img">                            
                            <img src="/images/device1/PhysCamera035(-potolok).jpg" alt="" class="show-more" data-src="/images/device1/PhysCamera035(-potolok).jpg">
                        </div>
                        <div class="flex_img">                            
                            <img src="/images/device1/PhysCamera036(-potolok).jpg" alt="" class="show-more" data-src="/images/device1/PhysCamera036(-potolok).jpg">
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="3d">@include('layouts.MVD')</div>
                <div role="tabpanel" class="tab-pane" id="some_slide" style="display: block">
                <style>
                    .slider .slides,
                    .slider .slides ,
                    .slider li,
                    .flex-viewport,
                    #slider{
                        height: 100% !important;
                    }
                    #carousel .flex-viewport{
                        border: 4px solid #fff;
                        border-radius: 5px;
                    }
                    .slider img
                    {
                        max-height: 100%;
                    }
                    .flexslider{
                        background-color: transparent;
                        border: none;
                    }
                    #slider .slides img{

                        border: 4px solid #fff;
                        border-radius: 10px;
                    }

                    #carousel .flex-direction-nav  a,
                    #slider .flex-direction-nav  a{
                        display: block;
                        opacity: 1 !important;
                    }
                    .flexslider:hover .flex-direction-nav .flex-prev{
                        left: -120px;
                    }
                    .flexslider:hover .flex-direction-nav .flex-next{
                        right: -100px;
                    }
                    .flexslider .flex-prev, .flexslider .flex-next{
                        background: transparent;
                        height: 50px;
                        padding: 30px;
                        top: 35%;
                    }
                    .flex-direction-nav .flex-next{
                        right: -100px;
                    }
                    .flex-direction-nav .flex-prev{
                        left: -120px;
                    }
                    #slider .flex-direction-nav .flex-disabled,
                    #carousel .flex-direction-nav .flex-disabled{
                        opacity: .2 !important;
                    }
                    .flexslider .flex-prev:before{
                        content: '\f001';
                    }
                    .flexslider .slides img{
                        width: auto;
                        display: block;
                        margin: 0 auto;
                    }
                    .flexslider .slides > li{
                        display: flex !important;
                        align-items: center;
                    }
                    .slider #carousel li{
                        height: auto !important;
                        margin: 0 !important;
                        border-right: 4px solid #fff;
                        padding: 0 10px;
                    }
                </style>
                <div class="container" style="width: 85%">
                  <section class="slider" style="height: 100%; position: relative">
                    <div id="slider" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                      <ul class="slides" style="padding-top: 5px">
                        <li>
                            <img src="/images/device1/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/26.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/27.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/28.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/29.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/30.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/31.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/32.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/33.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/34.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/35.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/36.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/37.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/38.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/39.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/40.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/41.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/42.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/43.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/44.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/45.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/46.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/47.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/48.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/49.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/50.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/51.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/52.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/53.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/54.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/55.jpg" />
                        </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0;height:150px">
                      <ul class="slides" style="
    display: flex;
    align-items: stretch;">
                        <li>
                            <img src="/images/device1/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/26.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/27.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/28.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/29.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/30.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/31.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/32.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/33.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/34.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/35.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/36.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/37.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/38.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/39.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/40.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/41.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/42.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/43.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/44.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/45.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/46.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/47.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/48.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/49.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/50.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/51.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/52.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/53.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/54.jpg" />
                        </li>
                        <li>
                            <img src="/images/device1/sl1/55.jpg" />
                        </li>
                      </ul>
                    </div>
                  </section>
                    
                </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="settings">4444444444</div>
                <div role="tabpanel" class="tab-pane" id="settings">5555555555</div>
              </div>

   		</div>
      </div>
</div>


<style>
    .modal-backdrop.in{
        opacity: .9;
    }
    .control_modal:before{
        content: '\f002';
        font-family: "flexslider-icon";
        font-size: 40px;
        position: relative;
        top: 7px;
    }
    .control_modal{
        padding: 10px;
        background: white;
        position: absolute;
        top: 48%;
        right: 10px;
        border-radius: 10px;
        color: #333;
        cursor: pointer;
    }
    .control_modal.left:before{
        content: '\f001';
    }
    .control_modal.left{
        right: auto;
        left: 10px;
    }
</style>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 90%; height: 97%;    margin: 10px auto;" role="document">
    <div class="modal-content">
      <div class="modal-content">
      <div class="modal-header" style="padding-bottom: 30px; border: none;
    position: absolute;
    right: 0;
    z-index: 100;">
        <button type="button" class="close" style="font-size: 30px;
    opacity: .9;
    padding: 25px;
    line-height: 12px;
    height: 0;
    background: #fff" data-dismiss="modal" aria-label="Close"><span style="font-size: 50px;" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
      <div  class="control_modal " aria-hidden="true"></div>
      <div  class="control_modal left" aria-hidden="true"></div>
    </div>
  </div>
</div>

<script src="/js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
<script src="/js/bootstrap.js"></script> <!-- UI -->
<script defer src="/FlexSlider/jquery.flexslider-min.js"></script>
<script>
    addEventListener('load', function(){
        $('.show-more').on('click', function(e){
            var src = $(e.target).attr('src');
            $('.modal .modal-content .modal-body').empty();
            $('<img src="'+src+'" class="full-width-img" alt="" />').appendTo($('.modal .modal-content .modal-body'));
            $('.modal').modal('show')
        })
        $('.control_modal').on('click', function(e){
            if ($(e.target).hasClass('left')) {
                var par = $('#content img[src="'+$('.modal-body img').attr('src')+'"]').parent().prev();
                if (par.length==0) {
                    var par2 = $('#content img[src="'+$('.modal-body img').attr('src')+'"]').parent().closest('.tab-pane')
                    $('.full-width-img').attr('src', par2.find('img').eq(par2.find('img').length-1).attr('src'))
                }else{
                    $('.full-width-img').attr('src', par.find('img').attr('src'))
                }
            }else{

                var par = $('#content img[src="'+$('.modal-body img').attr('src')+'"]').parent().next();
                if (par.length==0) {
                    var par2 = $('#content img[src="'+$('.modal-body img').attr('src')+'"]').parent().closest('.tab-pane')
                    $('.full-width-img').attr('src', par2.find('img').eq(0).attr('src'))
                }else{
                    $('.full-width-img').attr('src', par.find('img').attr('src'))
                }
            }

        })
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
      $('#slider .slides li').on('click', function(e){
        var target = $(e.target);
        if (!target.is('img')) {
            target = target.find('img');
        }
            var src = target.attr('src');
            $('.modal .modal-content .modal-body').empty();
            $('<img src="'+src+'" class="full-width-img" alt="" />').appendTo($('.modal .modal-content .modal-body'));
            $('.modal').modal('show')
      })
    })
</script>

</body>
</html>