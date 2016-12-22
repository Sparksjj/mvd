@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    <style>
.topbar, .site-header-wrapper, .site-footer, .site-footer-bottom, #player{
    display: none;
}
body{
    height: 100%;
    background: #454545;
}
#start{
    margin: 0 auto;
    margin-top: 30%;
}
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            function Projector(element, surce) {
                var currentVideo = surce[0];
                var videos = surce;
                var nextVideo = getNext();

                this.play = function(){
                    element.find('source').attr('src', currentVideo);
                    element[0].load();
                    element[0].play();
                    refreshData();
                };

                this.goFullscrin = function() {
                  if(element[0].requestFullScreen) {
                    element[0].requestFullScreen();
                  } else if(element[0].mozRequestFullScreen) {
                    element[0].mozRequestFullScreen();
                  } else if(element[0].webkitRequestFullScreen) {
                    element[0].webkitRequestFullScreen();
                  }
                };

                function getNext(){
                    var next;
                    videos.forEach(function(item, i){
                        if(currentVideo == item){
                            if (i == videos.length-1) {
                                next = videos[0];
                            }else{
                                next = videos[i+1];
                            }
                        }
                    })
                    return next;
                }
                function refreshData(){                
                    currentVideo = getNext();
                    nextVideo = getNext();
                }
                element.on('ended', function(){
                    projector.play();
                });
            }

            var projector = new Projector($('#player'), [ @foreach($videos as $video) '{{$video->path}}', @endforeach]);
            $('#start').on('click', function(){                
                projector.goFullscrin();
                projector.play();
                $('#player').show()
                $('#start').hide()
            })
        });
    </script>
    <div class="main" role="main" >
        <div id="content" class="content full" style="padding-top: 0;">
        
            <div class="dgray-bg">
                <div class="padding-tb45">
                    <div class="">
                        <div class="carousel-wrapper">
                            <div class="row text-center" style="padding: 0 50px">

                                <video id="player" width="700px" height="400px" controls="controls">
                                    <source src="">
                                </video>
                                <button id="start" type="button" class="btn btn-primary btn-lg">{{trans('layout.start')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection