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
    font-size:14px;
    color: #444;
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
.content-links{
    cursor: pointer;
    position: relative;
    z-index: 100;
    margin: 0px;
    padding: 3px 0;
}
.content-links .points{
    position: absolute;
    display: block;
    background: url(/images/point.png) repeat-x 0 84%;
    background-size: auto 11px;
    width: 100%;
    height: 100%;
    bottom: 5px;
    z-index: -1;
}
.content-links .p-number, .content-links .p-name{
    z-index: 10;
    background-color: #fff;
    padding: 0 5px;
    height: 100%;
}
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
        $('.book-wrapper').css('min-height', $(window).height()-85)
        function loadApp() {
            $('#preloader').hide();
            $('#flipbook').show();
            $('#flipbook').turn({width: '100%', height: $('.book-wrapper').height(), page: 2});
            $('#pre-page').on('click', function(){
                $('#flipbook').turn('previous');
            })
            $('#next-page').on('click', function(){
                $('#flipbook').turn('next');
            })
            $('.content-links').on('click', function(e){
                console.log(+$(e.target).attr('data-position')+3);
                var p = (+$(e.target).parent('p').attr('data-position')+4);
                $('#flipbook').turn("page", p);
            })
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
                                        <div class="col-xs-6" id="pre-page"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Предыдущая</div>
                                        <div class="col-xs-6 text-right" id="next-page">Следующая <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                                    </div>

                                    <div class=" text-center book-wrapper" style="margin-top: 55px;">
                                                <div id="flipbook">
                                                  <div class="hard"> <h1 style="padding-top: 40%">{{$book['title_' . Lang::getLocale()]}}</h1> </div>
                                                  <div class="hard"></div>

                                                

                                                  <div class="asdasdasdasd"> 
                                                      <div class="page_wrapper" style="padding: 20px;padding-left:50px; ">
                                                @foreach($content as $index => $link)

                                                            @if($index==0) <h2>Оглавление</h2> @endif
                                                            <p class="text-left content-links"  data-position="{{$link->position}}">
                                                                <span class="points"></span>
                                                                <span class="p-name">{{$link['title_'.Lang::getLocale()]}}</span>
                                                                <span class="pull-right p-number">{{$link->position+4}}</span>
                                                            </p>
                                                
                                                @endforeach
                                                      </div>
                                                  </div>

                                                  <div > 
                                                  </div>

                                                @foreach($pages as $index=>$page)
                                                  <div > 
                                                  <div class="page_wrapper" style="padding: 20px; @if($index%2) padding-right:40px; @else padding-left:50px;  @endif">
                                                    {!! $page['content_' . Lang::getLocale()] !!}
                                                      
                                                  </div>
                                                  </div>
                                                @endforeach
                                                @if(count($pages)%2 == 0) <div class="hard"></div> @endif
                                                  <div class="hard"> <h1 style="padding-top: 40%">{{$book['title_' . Lang::getLocale()]}}</h1> </div>
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