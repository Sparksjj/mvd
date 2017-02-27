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
    }
    #content_2d > .container .flex_img{
        width: 100%;
        padding: 10px;
        /* border: 4px solid #fff; */
        display: block;
        margin-right: 20px;
        border-radius: 20px;
        
        cursor: pointer;
        position: relative;
        
        font-weight: bold;
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
    video::-internal-media-controls-download-button {
    display:none;
    }

    video::-webkit-media-controls-enclosure {
        overflow:hidden;
    }

    video::-webkit-media-controls-panel {
        width: calc(100% + 30px); /* Adjust as needed */
    }
</style>

    <div class="container-fluid big_title_main">
     МУЗЕЙ МИНИСТЕРСТВА ВНУТРЕННИХ ДЕЛ РЕСПУБЛИКИ БЕЛАРУСЬ
     <div class="container-fluid text-center"> 
        <div class="col-sm-1" style="width:16%">     
            <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>ФИЛЬМ</span></a>
        </div>
        <div class="col-sm-3">
            <a class="device_buttom" href="#3d" data-type="1" aria-controls="profile" role="tab" data-toggle="tab"> <span>ИСТОРИЯ МИЛИЦИИ 1941-1991</span></a></li>
        </div>
        <div class="col-sm-4">
            <a class="device_buttom" href="#some_slide" data-type="2" aria-controls="profile" role="tab" data-toggle="tab"> <span>ТЕРРИТОРИАЛЬНЫЕ ОРГАНЫ ВНУТРЕННИХ ДЕЛ</span></a>
        </div>
        <div class="col-sm-3">
            <a class="device_buttom" href="#some_slide2" data-type="3" aria-controls="profile" role="tab" data-toggle="tab"> <span>АРХИВНЫЕ ДОКУМЕНТЫ</span></a>
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

                         <div class="container-fluid text-center"> 
                            <div class="col-sm-6" >     
                                <a class="device_buttom" href="#content_video1" aria-controls="profile" role="tab" data-toggle="tab"> <span>2ая серия</span></a>
                            </div>
                            <div class="col-sm-6" >     
                                <a class="device_buttom" href="#content_video2" aria-controls="profile" role="tab" data-toggle="tab"> <span>3ая серия</span></a>
                            </div>
                            <div class="col-sm-6" style="margin-top: 20px; margin-bottom: 100px">     
                                <a class="device_buttom" href="#content_video3" aria-controls="profile" role="tab" data-toggle="tab"> <span>4ая серия</span></a>
                            </div>
                            <div class="col-sm-6" style="margin-top: 20px; margin-bottom: 100px">     
                                <a class="device_buttom" href="#content_video4" aria-controls="profile" role="tab" data-toggle="tab"> <span>5ая серия</span></a>
                            </div>
                         </div>

                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane " id="content_video1">
                    <div class="container">
                        <div class="flex_img">   
                         <div class="container-fluid text-center"> 
                            <div class="col-sm-6 col-sm-offset-3" >     
                                <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>НАЗАД</span></a>
                            </div>
                         </div>                         
                           <video width="1000" height="500" controls="controls">
                                <!-- 2ая серия -->
                                <source src="">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="content_video2">
                    <div class="container">
                        <div class="flex_img">   
                         <div class="container-fluid text-center"> 
                            <div class="col-sm-6 col-sm-offset-3" >     
                                <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>НАЗАД</span></a>
                            </div>
                         </div>                             
                           <video width="1000" height="500" controls="controls">
                                <!-- 3ая серия -->
                                <source src="">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="content_video3">
                    <div class="container">
                        <div class="flex_img">    
                         <div class="container-fluid text-center"> 
                            <div class="col-sm-6 col-sm-offset-3" >     
                                <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>НАЗАД</span></a>
                            </div>
                         </div>                            
                           <video width="1000" height="500" controls="controls">
                                <!-- 4ая серия -->
                                <source src="">
                           </video>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="content_video4">
                    <div class="container">
                        <div class="flex_img">     
                         <div class="container-fluid text-center"> 
                            <div class="col-sm-6 col-sm-offset-3" >     
                                <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"> <span>НАЗАД</span></a>
                            </div>
                         </div>                           
                           <video width="1000" height="500" controls="controls">
                                <!-- 5ая серия -->
                                <source src="">
                           </video>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="3d">
                <div class="container" style="width: 85%">
                  <section class="slider" style="height: 100%; position: relative">
                    <div id="slider" class="flexslider" style="padding-bottom: 190px; max-height: 100%">
                      <ul class="slides" style="padding-top: 5px">
                        <li>
                            <img src="/images/device3/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/26.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/27.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/28.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/29.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/30.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/31.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/32.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/33.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/34.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/35.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/36.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/37.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/38.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/39.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/40.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/41.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/42.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/43.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/44.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/45.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/46.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/47.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/48.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/49.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/50.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/51.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/52.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/53.jpg" />
                        </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                      <ul class="slides" style="
                        display: flex;
                        align-items: stretch;">
                        <li>
                            <img src="/images/device3/sl1/02.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/03.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/06.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/07.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/08.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/09.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/10.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/11.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/12.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/13.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/14.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/15.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/16.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/17.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/18.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/19.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/20.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/21.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/22.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/23.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/24.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/25.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/26.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/27.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/28.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/29.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/30.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/31.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/32.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/33.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/34.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/35.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/36.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/37.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/38.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/39.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/40.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/41.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/42.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/43.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/44.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/45.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/46.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/47.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/48.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/49.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/50.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/51.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/52.jpg" />
                        </li>
                        <li>
                            <img src="/images/device3/sl1/53.jpg" />
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
                                <img src="/images/device3/sl2/1.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/3.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/4.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/5.jpg" />
                                </li>
                            <li>
                                <img src="/images/device3/sl2/6.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/7.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/8.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/9.jpg" />
                                </li>
                            <li>
                                <img src="/images/device3/sl2/10.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/11.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/12.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/13.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/14.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/15.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/16.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/17.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/18.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/19.jpg" />
                                </li>
                          </ul>
                        </div>
                        <div id="carousel2" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                          <ul class="slides" style="
                            display: flex;
                            align-items: stretch;">
                            <li>
                                <img src="/images/device3/sl2/1.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/3.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/4.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/5.jpg" />
                                </li>
                            <li>
                                <img src="/images/device3/sl2/6.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/7.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/8.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/9.jpg" />
                                </li>
                            <li>
                                <img src="/images/device3/sl2/10.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/11.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/12.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/13.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/14.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/15.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/16.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/17.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/18.jpg" />
                                </li>
                                <li>
                                <img src="/images/device3/sl2/19.jpg" />
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
                                    <img src="/images/device3/sl3/Дислокация детских комнат милиции по городам Белорусской ССР и штаты инспекторского состава для их обслуживания.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка зам. начальника Управления милиции МВД БССР по политчасти об убийстве бандитами участкового Ляховичского ра.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -5.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -6.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -7.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-10.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-11.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-12.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-13.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-14.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-15.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-16.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-17.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-18.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-19.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-20.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-22.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-23.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-24.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-25.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-26.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-27.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-28.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-29.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-30.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-31.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-32.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-33.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-5.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-6.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-7.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-8.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-9.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.21.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.34.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о  фактах бандитизма в Лидском районе Гродненской области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о  фактах бандитизма в Плисском районе Полоцкой области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист капитана Кутузова Никифора Михайловича.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист подполковника милиции Пикулева Евгения Михайловича-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист подполковника милиции Пикулева Евгения Михайловича-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист полковника внутренней службы Ильинского Николая Ивановича-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист полковника внутренней службы Ильинского Николая Ивановича-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Отчет о работе отдела кадров МВД Белорусской ССР за 1946 год-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Отчет о работе отдела кадров МВД Белорусской ССР за 1946 год-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Письмо наркома внутренних дел С. Бельченко в СНК БССР о необходимости выделения средств на оборудование детских комнат милиции.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление Витебского обкома  КП(б)Б о представлении к правительственным наградам работников органов УМВД по области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 207       «Об организации детских комнат милиции в городах Белорусской ССР»-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 207       «Об организации детских комнат милиции в городах Белорусской ССР»-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 208         «О подготовке системы Белзаготскот -1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 208         «О подготовке системы Белзаготскот -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Прапанова Міністэрства унутраных спраў Рэспублікі Беларусь аб устанаўленні ў рэспубліцы Дня беларускай міліцыі-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Прапанова Міністэрства унутраных спраў Рэспублікі Беларусь аб устанаўленні ў рэспубліцы Дня беларускай міліцыі-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Смета на содержание  одной детской  комнаты милиции на 1944 г..jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Сообщение в ЦК КП(б)Б о чрезвычайных происшествиях в Ляховичском районе Барановичской области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о количестве зарегистрированных, раскры-тых и оставшихся нераскрытыми особо опасных преступлений по БССР за 1947 – 19.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о работе отдела по борьбе с бандитизмом УМВД Минской области за период с 1 января по 1 октября 1949 г..jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о ходе выполнения Указа Президиума Верховного Совета СССР от 14 октября 1959 г. «О рассмотрении дел на лиц, отбывающи.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о ходе выполнения Указа Президиума Верховного Совета СССР от 14 октября 1959 г. «О рассмотрении дел на лиц-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Указ Президиума Верховного Совета СССР  «О награждении орденами и медалями СССР работников органов внутренних дел».jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Ходатайство в ЦК КП(б)Б о представлении к правительственным наградам сотрудников МГБ  и  МВД  БССР.jpg" />
                                </li>
                          </ul>
                        </div>
                        <div id="carousel3" class="flexslider" style="position: absolute;bottom: 0;left: 0;margin: 20px 0;right: 0; height: 150px;">
                          <ul class="slides" style="
                            display: flex;
                            align-items: stretch;">
                                <li>
                                    <img src="/images/device3/sl3/Дислокация детских комнат милиции по городам Белорусской ССР и штаты инспекторского состава для их обслуживания.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка зам. начальника Управления милиции МВД БССР по политчасти об убийстве бандитами участкового Ляховичского ра.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел БССР               С. Бельченко о состоянии работы по борьбе с  детской -3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -5.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -6.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка министра внутренних дел Белорусской ССР С. Бельченко о результатах работы органов МВД Белорусской ССР -7.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Докладная записка о состоянии с размещением минского гарнизона милиции и обеспечением квартирами милицейских работников-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-10.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-11.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-12.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-13.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-14.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-15.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-16.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-17.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-18.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-19.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-20.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-22.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-23.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-24.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-25.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-26.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-27.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-28.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-29.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-30.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-31.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-32.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-33.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-5.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-6.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-7.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-8.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.-9.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.21.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Доклад в НКВД СССР о состоянии кадров НКВД Белорусской ССР    на    1 марта 1946 г.34.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о фактах бандитизма в Ляховичском районе Барановичской области-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о  фактах бандитизма в Лидском районе Гродненской области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Информационное сообщение в ЦК КП(б)Б о  фактах бандитизма в Плисском районе Полоцкой области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист капитана Кутузова Никифора Михайловича.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист подполковника милиции Пикулева Евгения Михайловича-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист подполковника милиции Пикулева Евгения Михайловича-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист полковника внутренней службы Ильинского Николая Ивановича-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Наградной лист полковника внутренней службы Ильинского Николая Ивановича-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Отчет о работе отдела кадров МВД Белорусской ССР за 1946 год-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Отчет о работе отдела кадров МВД Белорусской ССР за 1946 год-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Письмо наркома внутренних дел С. Бельченко в СНК БССР о необходимости выделения средств на оборудование детских комнат милиции.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление Витебского обкома  КП(б)Б о представлении к правительственным наградам работников органов УМВД по области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 207       «Об организации детских комнат милиции в городах Белорусской ССР»-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 207       «Об организации детских комнат милиции в городах Белорусской ССР»-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 208         «О подготовке системы Белзаготскот -1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Постановление СНК Белорусской ССР № 208         «О подготовке системы Белзаготскот -2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Прапанова Міністэрства унутраных спраў Рэспублікі Беларусь аб устанаўленні ў рэспубліцы Дня беларускай міліцыі-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Прапанова Міністэрства унутраных спраў Рэспублікі Беларусь аб устанаўленні ў рэспубліцы Дня беларускай міліцыі-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол допроса Марковой Елизаветы Николаевны-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Протокол № 32 заседания Бюро ЦК КПБ-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Смета на содержание  одной детской  комнаты милиции на 1944 г..jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Сообщение в ЦК КП(б)Б о чрезвычайных происшествиях в Ляховичском районе Барановичской области.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о количестве зарегистрированных, раскры-тых и оставшихся нераскрытыми особо опасных преступлений по БССР за 1947 – 19.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о работе отдела по борьбе с бандитизмом УМВД Минской области за период с 1 января по 1 октября 1949 г..jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-1.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-3.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о результатах работы органов милиции МВД Белорусской ССР за 1947 – 1948 гг.-4.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о ходе выполнения Указа Президиума Верховного Совета СССР от 14 октября 1959 г. «О рассмотрении дел на лиц, отбывающи.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Справка о ходе выполнения Указа Президиума Верховного Совета СССР от 14 октября 1959 г. «О рассмотрении дел на лиц-2.jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Указ Президиума Верховного Совета СССР  «О награждении орденами и медалями СССР работников органов внутренних дел».jpg" />
                                </li>
                                <li>
                                    <img src="/images/device3/sl3/Ходатайство в ЦК КП(б)Б о представлении к правительственным наградам сотрудников МГБ  и  МВД  БССР.jpg" />
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