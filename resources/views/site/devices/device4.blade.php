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
    #some_video > .container,
    #content_2d > .container{
        display: flex;
        align-items: center;
        height: 100%;
        justify-content: center;
    }
    #some_video > .container .flex_img,
    #content_2d > .container .flex_img{
        
        padding: 10px;
        border: 4px solid #fff;
        display: block;
        margin-right: 20px;
        border-radius: 20px;
        
        cursor: pointer;
        position: relative;
    }
    #some_video > .container .flex_img:last-child,
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
        font-size: 30px;
    }
    .device_buttom:hover{
        color: #ede2c6;
    }
    .device_buttom:visited{
        color: #ede2c6;
    }


            @-ms-viewport { width: device-width; }
            @media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
            * { padding: 0; margin: 0; }
            html { height: 100%; }
            body { height: 100%; overflow:hidden; }
            div#container { height: 100%; width: 100%; margin: 0 auto; margin-top: 0px; padding-bottom: 0px; }
            div#tourDIV {
                height:100%;
                position:relative;
                overflow:hidden;
            }
            div#panoDIV {
                height:100%;
                position:relative;
                overflow:hidden;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -o-user-select: none;
                user-select: none;
            }       
            .site-footer{
                display: none
            }
            div.body{
                height: 100%;
            }
            .topbar {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                z-index: 999;
            }
            .site-header-wrapper{
                position: absolute;
                top: 0px;
                width: 100%;
            }
            .site-footer-bottom{
                position: absolute;
                bottom: 0;
                width: 100%
                height: 50px;
                line-height: 50px;
                background-color: white;
                left: 0;
                right: 0;
                padding: 0;
            }           
            @media (max-width: 901px){
                .site-header-wrapper{
                    top: 0px;
                }
                div#container { 
                    margin-top: 0px; 
                }
            }           
            @media (max-width: 445px){
                .site-header-wrapper{
                    top: 0px;
                }
                div#container { 
                    margin-top: 0px; 
                }
                
            }           
            @media (max-width: 360px){
                .topbar > .container{
                    padding: 0
                }
            }   


                    .slider .slides,
                    .slider .slides ,
                    .slider li,
                    .flex-viewport,
                    #slider2,
                    #slider3,
                    #slider{
                        height: 100% !important;
                    }
                    #carousel2 .flex-viewport,
                    #carousel3 .flex-viewport,
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
                    #slider2 .slides img,
                    #slider3 .slides img,
                    #slider .slides img{

                        border: 4px solid #fff;
                        border-radius: 10px;
                    }

                    #carousel .flex-direction-nav  a,
                    #carousel2 .flex-direction-nav  a,
                    #carousel3 .flex-direction-nav  a,
                    #slider2 .flex-direction-nav  a,
                    #slider3 .flex-direction-nav  a,
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
                    #slider2 .flex-direction-nav .flex-disabled,
                    #slider3 .flex-direction-nav .flex-disabled,
                    #carousel2 .flex-direction-nav .flex-disabled,
                    #carousel3 .flex-direction-nav .flex-disabled,
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
                    .slider #carousel2 li,
                    .slider #carousel3 li,
                    .slider #carousel li{
                        height: auto !important;
                        margin: 0 !important;
                        border-right: 4px solid #fff;
                        padding: 0 10px;
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
        <div class="col-sm-1" style="width:16%">     
            <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>ФИЛЬМ</span></a>
        </div>
        <div class="col-sm-3">
            <a class="device_buttom" href="#3d" data-type="1" aria-controls="profile" role="tab" data-toggle="tab"> <span>ИСТОРИЯ МИЛИЦИИ 1991-2017</span></a></li>
        </div>
        <div class="col-sm-4">
            <a class="device_buttom" href="#some_slide" data-type="2" aria-controls="profile" role="tab" data-toggle="tab"> <span>ТЕРРИТОРИАЛЬНЫЕ ОРГАНЫ ВНУТРЕННИХ ДЕЛ</span></a>
        </div>
        <div class="col-sm-3">
            <a class="device_buttom" href="#no_cont" aria-controls="profile" role="tab" data-toggle="tab"> <span>ПОДРАЗДЕЛЕНИЯ МВД</span></a>
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
                           <video width="1000" height="500" controls="controls">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane active" id="some_video">
                    <div class="container">
                        <div class="flex_img">                            
                           <video width="1000" height="500" controls="controls">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane active" id="no_cont">
                    <div class="container">
                        <div class="flex_img">                            
                            <div class="container-fluid text-center" style="margin-top: 70px; font-weight: bold"> 
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a class="device_buttom" href="#some_video"  aria-controls="profile" role="tab" data-toggle="tab"> <span>ВИДЕО</span></a>
                                </div>
                                <div class="col-sm-4">
                                    <a class="device_buttom" href="#some_slide2" data-type="3" aria-controls="profile" role="tab" data-toggle="tab"> <span>ИСТОРИЯ</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="3d">
                <div class="container" style="width: 85%">
                  <section class="slider" style="height: 100%; position: relative">
                    <div id="slider" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                      <ul class="slides" style="padding-top: 5px">
                        <li>
                            <img src="/images/device4/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/04.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/05.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/17.jpg" />
                        </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                      <ul class="slides" style="
                        display: flex;
                        align-items: stretch;">
                        <li>
                            <img src="/images/device4/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/04.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/05.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl1/17.jpg" />
                        </li>
                      </ul>
                    </div>
                  </section>
                    
                </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="some_slide">
                    <div class="container" style="width: 85%">
                      <section class="slider" style="height: 100%; position: relative">
                        <div id="slider2" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                          <ul class="slides" style="padding-top: 5px">
                            <li>
                                <img src="/images/device4/sl2/01.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/02.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/03.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/04.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/05.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/06.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/07.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/08.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/09.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/10.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/11.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/12.jpg" />
                            </li>
                          </ul>
                        </div>
                        <div id="carousel2" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                          <ul class="slides" style="
                            display: flex;
                            align-items: stretch;">
                            <li>
                                <img src="/images/device4/sl2/01.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/02.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/03.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/04.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/05.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/06.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/07.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/08.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/09.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/10.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/11.jpg" />
                            </li>
                            <li>
                                <img src="/images/device4/sl2/12.jpg" />
                            </li>
                          </ul>
                        </div>
                      </section>
                        
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="some_slide2">
                    <div class="container" style="width: 85%">
                      <section class="slider" style="height: 100%; position: relative">
                        <div id="slider3" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                          <ul class="slides" style="padding-top: 5px">
                          
                        <li>
                            <img src="/images/device4/sl3/003.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/004.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/005.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/006.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/007.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/008.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/009.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/010.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/011.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/012.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/013.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/014.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/015.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/016.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/017.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/018.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/019.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/020.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/021.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/022.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/023.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/024.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/025.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/026.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/027.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/028.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/029.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/030.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/031.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/032.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/033.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/034.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/035.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/036.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/037.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/038.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/039.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/040.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/041.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/042.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/043.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/044.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/045.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/046.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/047.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/048.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/049.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/050.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/051.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/052.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/053.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/054.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/055.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/056.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/057.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/058.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/059.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/060.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/061.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/062.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/063.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/064.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/065.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/066.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/067.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/068.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/069.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/070.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/071.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/072.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/073.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/074.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/075.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/076.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/077.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/078.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/079.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/080.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/081.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/082.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/083.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/084.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/085.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/086.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/087.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/088.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/089.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/090.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/091.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/092.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/093.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/094.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/095.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/096.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/097.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/098.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/099.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/100.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/101.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/102.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/103.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/104.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/105.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/106.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/107.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/108.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/109.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/110.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/111.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/112.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/113.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/114.jpg" />
                        </li>
                          </ul>
                        </div>
                        <div id="carousel3" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                          <ul class="slides" style="
                            display: flex;
                            align-items: stretch;">
                        <li>
                            <img src="/images/device4/sl3/003.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/004.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/005.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/006.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/007.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/008.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/009.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/010.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/011.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/012.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/013.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/014.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/015.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/016.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/017.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/018.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/019.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/020.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/021.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/022.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/023.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/024.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/025.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/026.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/027.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/028.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/029.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/030.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/031.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/032.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/033.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/034.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/035.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/036.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/037.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/038.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/039.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/040.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/041.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/042.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/043.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/044.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/045.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/046.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/047.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/048.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/049.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/050.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/051.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/052.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/053.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/054.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/055.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/056.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/057.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/058.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/059.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/060.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/061.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/062.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/063.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/064.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/065.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/066.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/067.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/068.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/069.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/070.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/071.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/072.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/073.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/074.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/075.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/076.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/077.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/078.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/079.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/080.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/081.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/082.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/083.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/084.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/085.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/086.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/087.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/088.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/089.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/090.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/091.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/092.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/093.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/094.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/095.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/096.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/097.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/098.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/099.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/100.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/101.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/102.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/103.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/104.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/105.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/106.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/107.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/108.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/109.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/110.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/111.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/112.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/113.jpg" />
                        </li>
                        <li>
                            <img src="/images/device4/sl3/114.jpg" />
                        </li>
                          </ul>
                        </div>
                      </section>
                        
                    </div>

                </div>
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
/*      *//**/
      var carousel2 = true;
      var carousel3 = true;
      var carousel1 = true;
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          if ($(e.target).attr('data-type')==1 && carousel2) {
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
            carousel2 = false;
          }else if($(e.target).attr('data-type')==2 && carousel1){
            $('#carousel2').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 210,
                    itemMargin: 5,
                    asNavFor: '#slider2'
                  });

                  $('#slider2').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel2",
                    start: function(slider){
                      $('body').removeClass('loading');
                    }
                  });
                  $('#slider2 .slides li').on('click', function(e){
                    var target = $(e.target);
                    if (!target.is('img')) {
                        target = target.find('img');
                    }
                        var src = target.attr('src');
                        $('.modal .modal-content .modal-body').empty();
                        $('<img src="'+src+'" class="full-width-img" alt="" />').appendTo($('.modal .modal-content .modal-body'));
                        $('.modal').modal('show')
                  })
                  carousel1 = false;
          }else if($(e.target).attr('data-type')==3 && carousel3){
            $('#carousel3').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 210,
                    itemMargin: 5,
                    asNavFor: '#slider3'
                  });

                  $('#slider3').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel3",
                    start: function(slider){
                      $('body').removeClass('loading');
                    }
                  });
                  $('#slider3 .slides li').on('click', function(e){
                    var target = $(e.target);
                    if (!target.is('img')) {
                        target = target.find('img');
                    }
                        var src = target.attr('src');
                        $('.modal .modal-content .modal-body').empty();
                        $('<img src="'+src+'" class="full-width-img" alt="" />').appendTo($('.modal .modal-content .modal-body'));
                        $('.modal').modal('show')
                  })
                  carousel3 = false;
          } // newly activated tab
        })
    })
</script>

</body>
</html>