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
    video::-internal-media-controls-download-button {
    display:none;
    }

    video::-webkit-media-controls-enclosure {
        overflow:hidden;
    }

    video::-webkit-media-controls-panel {
        width: calc(100% + 30px); /* Adjust as needed */
    }
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
    }
    #content_2d > .container .flex_img{
        
        padding: 10px;
        border: 4px solid #fff;
        display: block;
        margin-right: 20px;
        border-radius: 20px;
        cursor: pointer;
        position: relative;
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
                    #slider{
                        height: 100% !important;
                    }
                    #carousel2 .flex-viewport,
                    #carousel .flex-viewport{
                        border: 4px solid #fff;
                        border-radius: 5px;
                    }
                    .slider img
                    {
                        max-height: 100%;
                    }
                    .flexslider2,
                    .flexslider{
                        background-color: transparent;
                        border: none;
                    }
                    #slider2 .slides img,
                    #slider .slides img{

                        border: 4px solid #fff;
                        border-radius: 10px;
                    }

                    #carousel .flex-direction-nav  a,
                    #carousel2 .flex-direction-nav  a,
                    #slider2 .flex-direction-nav  a,
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
                    #carousel2 .flex-direction-nav .flex-disabled,
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
        <div class="col-sm-4">     
            <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>ФИЛЬМ</span></a>
        </div>
        <div class="col-sm-4">
            <a class="device_buttom" href="#3d" data-type="1" aria-controls="profile" role="tab" data-toggle="tab"><span>ИСТОРИЯ МИЛИЦИИ 1917-1941</span></a></li>
        </div>
        <div class="col-sm-4">
            <a class="device_buttom" href="#some_slide" data-type="2" aria-controls="profile" role="tab" data-toggle="tab"> <span>АРХИВНЫЕ ДОКУМЕНТЫ</span></a>
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
                                <!-- 1ая серия -->
                                <source src="">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="3d">
                <div class="container" style="width: 85%">
                  <section class="slider" style="height: 100%; position: relative">
                    <div id="slider2" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                      <ul class="slides" style="padding-top: 5px">
                        <li>
                            <img src="/images/device2/1sl/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/04.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/05.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/26.jpg" />
                        </li>
                      </ul>
                    </div>
                    <div id="carousel2" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px">
                      <ul class="slides" style="
                        display: flex;
                        align-items: stretch;">
                        <li>
                            <img src="/images/device2/1sl/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/04.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/05.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device2/1sl/26.jpg" />
                        </li>
                      </ul>
                    </div>
                  </section>
                    
                </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="some_slide">
                <div class="container" style="width: 85%">
                  <section class="slider" style="height: 100%; position: relative;">
                    <div id="slider" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                      <ul class="slides" style="padding-top: 5px">
                            <li>
                                <img src="/images/device2/2sl/Приказ № 11 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 11 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -3-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -3-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -4-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -5-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -6-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -7-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -8-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_056-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_056b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_057-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3297_023-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_001-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_002-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_003-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_004-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_005-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_006-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_007-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_008-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_191_001-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_191_001b-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_047-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_060-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_060b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_067-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_37_1_21_015_1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_1_21_103-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_012-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_013-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_014-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_015-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_017-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_018-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_019-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_020-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_004-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_005-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_006-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_013-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_013b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_014-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_563_268-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_83_365-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_199-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_199b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_200-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_200b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_201-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_201b-min.jpg" />
                            </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px">
                      <ul class="slides" style="
                        display: flex;
                        align-items: stretch;">
                            <li>
                                <img src="/images/device2/2sl/Приказ № 11 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 11 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 15 -3-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -2-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -3-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -4-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -5-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -6-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -7-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/Приказ № 20 -8-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_056-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_056b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_2118_057-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3297_023-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_001-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_002-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_003-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_004-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_005-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_006-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_007-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_101_1_3511_008-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_191_001-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_191_001b-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_047-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_060-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_060b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_36_1_30_067-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_37_1_21_015_1-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_1_21_103-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_012-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_013-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_014-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_015-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_017-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_018-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_019-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_37_4_57_020-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_004-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_005-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_1905_006-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_013-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_013b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_218_014-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_563_268-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_83_365-min.jpg" />
                            </li>

                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_199-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_199b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_200-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_200b-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_201-min.jpg" />
                            </li>
                            <li>
                                <img src="/images/device2/2sl/NARB_6_1_899_201b-min.jpg" />
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
      var carousel1 = true;
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          if ($(e.target).attr('data-type')==1 && carousel2) {
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
            carousel2 = false;
          }else if($(e.target).attr('data-type')==2 && carousel1){
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
          } // newly activated tab
          e.relatedTarget // previous active tab
        })
    })
</script>

</body>
</html>