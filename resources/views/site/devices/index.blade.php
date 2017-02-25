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
        width: 50%;
        padding: 10px;
        border: 4px solid #fff;
        display: block;
        margin-right: 20px;
        border-radius: 20px;
        margin-bottom: 150px;
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
        padding: 10px;
        padding-bottom: 60px;
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
        background: url(/images/btn2.png) 50% 50% no-repeat;
        background-size: cover;
        margin-top: 26px;
        width: 100%;
        display: block;
        border-radius: 10px;
        box-shadow: 0 0 20px #333;
        height: 75px;
        font-weight: bold;
        line-height: 87px;
        letter-spacing: 1.5px;
        color: #ede2c6 !important;
        font-size: 35px;
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
        <div class="col-sm-10 col-sm-offset-1 ">     
            <a class="device_buttom" href="{{url('/device1')}}"> <span>1.ХОЛЛ, инфокиоск 1-26”</span></a>
        </div>
        <div class="col-sm-10 col-sm-offset-1 ">
            <a class="device_buttom" href="{{url('/device2')}}"> <span>2.1 Инфокиоск 2-26”</span></a></li>
        </div>
        <div class="col-sm-10 col-sm-offset-1 ">
            <a class="device_buttom" href="{{url('/device3')}}"><span>3.1. инфокиоск 3-26”</span></a>
        </div>
        <div class="col-sm-10 col-sm-offset-1 ">
            <a class="device_buttom" href="{{url('/device4')}}"> <span>4.2. инфокиоск 4-26”</span></a>
        </div>
<!--         <div class="col-sm-10 col-sm-offset-1 ">     
    <a class="device_buttom" href="#content_2d" aria-controls="profile" role="tab" data-toggle="tab"><span>ИСТОРИЯ ПОДРАЗДЕЛЕНИЙ 1941-1991</span></a>
</div>
<div class="col-sm-10 col-sm-offset-1 ">
    <a class="device_buttom" href="#3d" aria-controls="profile" role="tab" data-toggle="tab"> <span>МИНИСТРЫ ВНУТРЕННИХ ДЕЛ 1941-1991</span></a></li>
</div>
<div class="col-sm-10 col-sm-offset-1 ">
    <a class="device_buttom" href="#some_slide" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-link"></i> <span>ФИЛЬМ "() ЛЕТ МИЛИЦИИ"</span></a>
</div>
<div class="col-sm-10 col-sm-offset-1 ">
    <a class="device_buttom" href="#"> <span>СОТРУДНИКИ, НАГРАЖДЕННЫЕ "ГАНАРОВЫ СУПРАЦОУНИК МУС"</span></a>
</div> -->
     </div>
    </div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" style="width: 90%; height: 93%" role="document">
    <div class="modal-content">
      <div class="modal-content">
      <div class="modal-header" style="padding-bottom: 30px; border: none">
        <button type="button" class="close" style="font-size: 30px; opacity: .9; padding: 10px 20px;margin-top: -15px" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
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