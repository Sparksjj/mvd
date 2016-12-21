@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    <style>
.topbar, .site-header-wrapper, .site-footer, .site-footer-bottom{
    display: none;
}
#flipbook{
    width:400px;
    height:300px;
    margin: 0 auto;
    display: none;
}
#preloader{
    font-size: 40px;
    display: block;
    color: #eee;
    text-align: center;
    margin-top: 30px;
}

#flipbook .page{
    width:400px;
    height:300px;
    background-color:white;
    line-height:300px;
    font-size:20px;
    text-align:center;
}

#flipbook .page-wrapper{
    -webkit-perspective:2000px;
    -moz-perspective:2000px;
    -ms-perspective:2000px;
    -o-perspective:2000px;
    perspective:2000px;
}

#flipbook .hard{
    background:#ccc !important;
    color:#333;
    -webkit-box-shadow:inset 0 0 5px #666;
    -moz-box-shadow:inset 0 0 5px #666;
    -o-box-shadow:inset 0 0 5px #666;
    -ms-box-shadow:inset 0 0 5px #666;
    box-shadow:inset 0 0 5px #666;
    font-weight:bold;
}

#flipbook .odd{
    background:-webkit-gradient(linear, right top, left top, color-stop(0.95, #FFF), color-stop(1, #DADADA));
    background-image:-webkit-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
    background-image:-moz-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
    background-image:-ms-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
    background-image:-o-linear-gradient(right, #FFF 95%, #C4C4C4 100%);
    background-image:linear-gradient(right, #FFF 95%, #C4C4C4 100%);
    -webkit-box-shadow:inset 0 0 5px #666;
    -moz-box-shadow:inset 0 0 5px #666;
    -o-box-shadow:inset 0 0 5px #666;
    -ms-box-shadow:inset 0 0 5px #666;
    box-shadow:inset 0 0 5px #666;
    
}

#flipbook .even{
    background:-webkit-gradient(linear, left top, right top, color-stop(0.95, #fff), color-stop(1, #dadada));
    background-image:-webkit-linear-gradient(left, #fff 95%, #dadada 100%);
    background-image:-moz-linear-gradient(left, #fff 95%, #dadada 100%);
    background-image:-ms-linear-gradient(left, #fff 95%, #dadada 100%);
    background-image:-o-linear-gradient(left, #fff 95%, #dadada 100%);
    background-image:linear-gradient(left, #fff 95%, #dadada 100%);
    -webkit-box-shadow:inset 0 0 5px #666;
    -moz-box-shadow:inset 0 0 5px #666;
    -o-box-shadow:inset 0 0 5px #666;
    -ms-box-shadow:inset 0 0 5px #666;
    box-shadow:inset 0 0 5px #666;
}
#controll-items div:hover{
    color: #eee;
}
#controll-items div{
    cursor: pointer;
    padding: 15px 0;
}
.padding-tb45{
    padding: 10px 0 20px 0;
}
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
        $('.book-wrapper').css('min-height', $(window).height()-85)
        function loadApp() {
            $('#preloader').hide();
            $('#flipbook').show();
            $('#flipbook').turn({width: '100%', height: $('.book-wrapper').height(), page: 2});
        }


        // Load the HTML4 version if there's not CSS transform

        yepnope('/turnjs4/lib/turn.min.js', {}, loadApp);

        })
    </script>
<!--     Start Body Content
      <div class="main" role="main">
    <div id="content" class="content full">

        <div class="spacer-50"></div>
<div class="container text-center">
            <div id="flipbook">
              <div class="hard"> Name </div> 
              <div class="hard"></div>
              <div> Page 1 </div>
              <div> Page 2 </div>
              <div> Page 3 </div>
              <div> Page 4 </div>
              <div class="hard"></div>
              <div class="hard"></div>
            </div>
</div>


        <div class="spacer-50"></div>

    </div>
       </div>  -->

        <!-- Start Body Content -->
    
    <!-- Start Body Content -->
    <div class="main" role="main" >
        <div id="content" class="content full" style="padding-top: 0;">
        
            <div class="dgray-bg">
                <div class="padding-tb45">
                    <div class="">
                        <div class="carousel-wrapper">
                            <div class="row" style="padding: 0 50px">
 
                                    <div id="controll-items" class="col-md-12">
                                        <div class="col-xs-6"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Предыдущая</div>
                                        <div class="col-xs-6 text-right">Следующая <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                                    </div>

                                    <div class=" text-center book-wrapper" style="margin-top: 55px;">
                                                <div id="flipbook">
                                                  <div class="hard"> Name </div> 
                                                  <div> <embed type="application/pdf" src="/documents/pdf/ddddd3/!!!!!!!!!!!!!!!!!/251fd1704370226727b1f9303c893156.pdf" style="width: 100%; height: 600px;"></embed> </div>
                                                  <div> <embed type="application/pdf" src="/documents/pdf/ddddd3/!!!!!!!!!!!!!!!!!/251fd1704370226727b1f9303c893156.pdf" style="width: 100%; height: 600px"></embed> </div>
                                                  <div> <embed type="application/pdf" src="/documents/pdf/ddddd3/!!!!!!!!!!!!!!!!!/251fd1704370226727b1f9303c893156.pdf" style="width: 100%; height: 600px; padding-left: 50px"></embed> </div>
                                                  <div> <embed type="application/pdf" src="/documents/pdf/ddddd3/!!!!!!!!!!!!!!!!!/251fd1704370226727b1f9303c893156.pdf" style="width: 100%; height: 600px; padding-right: 50px"></embed> </div>
                                                  <div> </div>
                                                  <div> Page 3 </div>
                                                  <div> Page 4 </div>
                                                  <div class="hard"></div>
                                                  <div class="hard">Конец</div>
                                                </div>
                                    </div>
                                    <div id="preloader"><i class="fa fa-spinner fa-spin"></i></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection