@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    @include('site.parts._slider')

    <style>
        .rotate-buttons{
            color: #ccc;
            display: inline-block;
            zoom: 1;
            margin: 5px;
            padding: 10px 16px;
            font-size: 14px;
            background-color: #323131;
            cursor: pointer;
        }
        .rotate-buttons:hover i{
            color: #fff;
        }
        .description-col{
            padding: 10px 0;
            color: #454545;
            padding-bottom: 0 !important;
        }
        .description-col .round-border{
            padding: 5px 10px;
            border: 1px solid #dabc74;
            border-radius: 15px;
            width: auto;
            display: inline-block;
            margin: 10px 0;
        }
        .description-col a{
            display: block;
        }
        .description-col .description-wrapper{
            padding-left: 10px;
        }
        .pagination-info.search-center .col-sm-6{
            text-align: center;
        }
        .pagination-info.search-center .col-sm-6.text-right{
            position: relative;
            top: -65px;
        }
        @media only screen and (max-width: 767px){
            .pagination-info.search-center .col-sm-6.text-right{
                top: 0;
            }
        }
    </style>
    <!-- Start Body Content -->
  	<div class="main" role="main" >
    	<div id="content" class="content full" style="padding-top: 0;">

            <div class="container breadcrumbs-wrapper" style="background-color: white;">
                <a href="{{route('main.index')}}">{{trans('layout.home')}}</a>
                <span class="separator">/</span>
                <a href="{{route('resource.index')}}">{{trans('layout.documents')}}</a>
                <span class="separator">/</span>
                <span class="breadcrumbs-current">{{$document['title_' . Lang::getLocale()]}}</span>
            </div>
        
            <div class="dgray-bg" style="background-color: transparent">

                	<div class="skewed-title-bar" style="background-color: transparent">
                    	<div class="container">
                            <h4  style="background-color: transparent; color: #444; border-bottom: 4px solid #999;" class="text-center">
                                <span>{{$document['title_' . Lang::getLocale()]}}</span>
                                
                            </h4>                               
                        </div>
                    </div>
                    <div class="container">
                    <div class="col-md-12 pagination-info search-center" style="padding-top: 20px">
                        
                        <div class="col-sm-6">
                        </div>
                        @include('site.resource.parts._searchForm')
                    </div>
                        <div class="col-sm-6">
                            <div style="padding-bottom: 25px">
                                @if(Auth::user() && Auth::user()->groups[0]->id == 2)
                                    <div class="description-col">
                                        <div><span class="round-border">{{trans('layout.i_number')}}</span></div>
                                        <div class="description-wrapper">
                                            &#8470; {{$document->inventory_number}}
                                        </div>
                                    </div>
                                    <div class="description-col">
                                        <div><span class="round-border">{{trans('layout.number')}} / {{trans('layout.get_date')}}</span></div>
                                        <div class="description-wrapper">
                                            &#8470; {{ $document->get_number . ' / ' . $document->get_data}}
                                        </div>
                                    </div>
                                    <div class="description-col">
                                        <div><span class="round-border">{{trans('layout.number')}} / {{trans('layout.fzk_date')}}</span></div>
                                        <div class="description-wrapper">
                                            &#8470; {{ $document->fzk_number . ' / ' . $document->fzk_data}}
                                        </div>
                                    </div>
                                @endif

                                    <div class="description-col">
                                        <div><span class="round-border">{{trans('layout.description')}}</span></div>
                                        <div class="description-wrapper">
                                            {{$document['description_'.lang::getLocale()]}}
                                        </div>
                                        <div class="description-wrapper">
                                            {{trans('layout.author')}}: {{$document->author}}
                                        </div>
                                        <div class="description-wrapper">
                                            {{trans('layout.created_at')}}: {{$created_at}}
                                        </div>
                                        <div class="description-wrapper">
                                            {{trans('layout.pats_number')}}: {{$document->parts_count}}
                                        </div>
                                        @if(Auth::user() && Auth::user()->groups[0]->id == 2)

                                            <div class="description-wrapper">
                                                {{trans('layout.material')}}: {{$document->material}}
                                            </div>

                                            <div class="description-wrapper">
                                                {{trans('layout.size_weight')}}: {{trans('layout.height')}}: {{$height}} мм., {{trans('layout.width')}} {{$width}} мм., {{trans('layout.length')}} {{$length}} мм., {{$document->weight}} г.
                                            </div>

                                            <div class="description-wrapper">
                                                {{trans('layout.safety')}}: {{$document->safety}}
                                            </div>

                                            <div class="description-wrapper">
                                                {{trans('layout.storage')}}: {{$document->storage}}
                                            </div>
                                        @endif
                                    </div>
                                @if(count($join_documents)>0)
                                    <div class="description-col">
                                        <div><span class="round-border">{{trans('layout.join_doc')}}</span></div>
                                        <div class="description-wrapper">
                                            @foreach($join_documents as $join_document)
                                                <a href="{{route('resource.show', $join_document)}}">{{$join_document['title_'.lang::getLocale()]}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif    
                            </div>
                        </div>

                    <div class="col-sm-6">
                        
                        <div class="padding-tb45" style="padding: 20px;
    margin: 20px 0;
    box-shadow: 6px 0px 10px;
    border: 1px solid #ddd;
    border-radius: 8px;">
                            <div class="">
                                <div class="carousel-wrapper">
                                    <div class="row">
                                    @if($document->type == 'pdf')
                                        <ul class="owl-carousel carousel-fw" id="venues-slider" data-columns="@if(count($sources) == 1) 1 @else 2 @endif" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="@if(count($sources) == 1) 1 @else 2 @endif" data-items-desktop-small="1" data-items-tablet="@if(count($sources) == 1) 1 @else 2 @endif" data-items-mobile="1">
                                            
                                                @foreach($sources as $source)
                                                    <li class="item">
                                                        <div class="featured-block featured-block-secondary format-standard">
                                                            <figure>
                                                                <iframe src="{{ $source->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%; @if(count($sources) == 1) height: 450px; @else height: 350px; @endif"></iframe>
                                                                <div class="show-full" data-toggle="modal" data-target="#show-full-source-{{$source->id}}"><i class="fa fa-eye" aria-hidden="true"></i></div>
                                                            </figure>
                                                        </div>
                                                    </li>

                                                @endforeach
                                        </ul>

                                    @elseif($document->type == 'video')
                                        <li class="item text-center list-unstyled">
                                            <video controls="controls">
                                                <source src="{{$sources[0]->path}}">
                                            </video>
                                        </li>
                                    @elseif($document->type == '3d')
                                        <div id="image_holder_x" class="imageholder text-center">
                                            <img id="product_image_x" src="{{$sources[0]->path}}"  />
                                        </div> 
                                            
                                        <div class="progress" id="progressbar" style="display: none; max-width: 400px; margin: 0 auto">
                                          <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color: #dabc74">
                                          </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <div class="rotate-buttons" id="rotate-left"><i class="fa fa-chevron-left"></i></div>
                                            <div class="rotate-buttons" id="rotate-right"><i class="fa fa-chevron-right"></i></div>             
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div>

    @if($document->type == 'pdf')
        <!-- Modals -->
        @foreach($sources as $source)    
            <div class="modal fade" id="show-full-source-{{$source->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document" style="width:99%; bottom: 0; height: 90%;">
                <div class="modal-content" style="height: 100%;">
                  <div class="modal-header" >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{$document['title_' . Lang::getLocale()]}}</h4>
                  </div>
                  <div class="modal-body" style="height: 90%;">
                    <iframe src="{{ $source->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%; height: 100%;"></iframe>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
    @elseif($document->type == '3d')
        <script>
        
            document.addEventListener("DOMContentLoaded", function(){
                eval((function(x){var d="";var p=0;while(p<x.length){if(x.charAt(p)!="`")d+=x.charAt(p++);else{var l=x.charCodeAt(p+3)-28;if(l>4)d+=d.substr(d.length-x.charCodeAt(p+1)*96-x.charCodeAt(p+2)+3104-l,l);else d+="`";p+=4}}return d})("jQuery(document).ready(function ($) {javascriptViewer = ` 7&element, options) {this.el = ` 6#;` -!$` .!$` J$)` 0\"` P# = $.extend({}, ` 7!defaults` s&;` <%` Q(` H#$el.data()` u#targetEl` (\"started = false` /\"` {$Check(` Q#imagesPath` s#` +\"Src = Array()` -)` &-autoFind = tru`!%#oldImage = -1` B#current` 0$0` 0#num` .!s` T\"focusable`!m,gre`!9!` P$speedDeg` #,Inc` 3/D`\"W\" = 0` j#ragging` y*positionClickedX`$5%gWhe` .$` E\"`\"(#` ;$oldDif` 5\"ease`#-$nertia` 2\"autoplay`!,$`#7'playSpe` u$revers`\"U+wid`$>%heigh`&G#iniW` 0'iniH` 3'posX`\"f'posY`\"\\&$root`'&!`%y)`%V#$main` 9!\"<div></div>\"` 6$view` $6`%i\"Hold`(b!` 02goToD`$v!`\"e+`%B!edNum`%~!;};`)K,.prototype = {`'U$:{ease:8, `#s#:1.5, `#I#:` {$otal_frames:null, `\"U\"_id` )#just_load` L$`\"*\"_src:[]}, _this:this, `)+!:`+ &) {if `#N\"`)E#) {return;}`$c& =`\"H\"getParam(\"view`$h!\"`\"b#`$+$` K\"`*G%`%:\"` J2`%8\"` P-` M\"` Y%ea`&;!` Q+ease`$5$paddingE` 41` 6#_` E(`#l#` ;.` 2#` @$`'T&` 9+` 2#` @$`(E'` :+` 2$` :,`(^!` 56` :!`!e%`,'`!`,`%#%`' %e`,S\"s`-q$_makeView();}, ` &%`%8*`(]&.css({`+X$:\"absolute\", `$u!:\"100%\", `$A\"` &%margin:\"0\", `#m#` '\"top` #\"left` $\"'text-align':\"center\", display:\"none\"}`)M0`!E5` E%view`!LToverflow:\"hidden` g+app`2>%`!I)`+{(` 8*view` 6$root` 0*main);$(\"*`'}$` -\".bi` <$mouseDownBind, $.proxy` 6\"clearSma`*r!his)` ]+`!8!.un` W3`!Q#loa`2^\"(0`%[#ouseWheelControl`%`'event, delta`%o$`!=&`&L$`2J%+=` E\" *`!M\"` v!_wheel_` @!;`+f\"`0W#}, getToFron`,/4`41)>= 0 &&`4E/<`4F+` J5!`(n#ol`\"`\"` =(` ,$ !== -1`\"I$`%5\"[` 6)]`&O!\"`'<#\", `'?\");} else {for (var i`21! i`!R-; i++` u+i` ^6`.y\"`!@(`\",(` F.block`*$`\"1%`\"W#` O(`+1#changeFocus();`3s\").trigger(\"move`&B$` R();}}}, `&-%`$\\'num) {`\"_!mg = new `!,\"var`1b\"`!I#;img.onload = `%8-num === 0) {$(` T!`!O'`!2%Start\");` <!.ini`1l! = img`1a\"` 1&`1F\"` 5#`*q\"` 6#zoom = 1` $'C`\"J\" =`!o\"` /!` 8#minZ` K\"` *-`,V/`+q+`,/*`,p2}var pe`0)!Math.round`\"n!/`!-#options.total_frames * 100)`#e!params = [num,` h!];`#-7Progress`/U!rams);$(img)`.8,relati`%S!`.22auto\"}` V%addClass(\"3dweb\"`!Y\"`#\"\" = $(\"<div rel='\" + num + \"'></div>\");` F\"`/:R}` V%`.n#img`%e$`$>*` 9#` /\"`&'%` =!.push` 1%` i#`.~=` \\\"`/4(`#w\");`'S(` |(Src.length - 1) {` 7\"_`$<%End(`+d&` 8\"`/Q&++num);}}`(u!s`%y!` p*[num]`/{!` g(`.W*`-l.= 0`+)\"`,]%` h-`!p#`\"5!!` 6!just`!!!` k$startPresentation();}`+a-`!L(`,`$` U!ed = tru`0\\!` [-`!p/update`\"t\"`#m\"` 2!autoplay`!N%`2 #Default`\"2$` ?$S`1|!`.a\"dragAndDrop(`'@\"`,b)`&.\"el.fadeTo(20, 0,`,k*`&R#main` ;(1);}`43!onRotateMov`.)(`1d)ismobil` &*gnored != e.pageX`3)%` 5\"2 > 2`$o+X ` E%`&,$` b+2 <=` M&` }$` L&` ?(++;}`&r$` m5`\"8'Up`$B/dragging = fals`1@CstopD` S#`1Y2`3oFif (i !`3 /`4+G`&{$Drag`$X+`#Q)`(q%goToDegree`\"Q%`\"3/` k#`\"-6`#(\"remov`#%%` /!`-o$Clicked`$((`0h\"ldDif`!F&degWhe` G$`(-$d`!]!`'c#`$t'` n1` b#`$g&`)x!$(document)`-r,Move`-t*`!U\"`(('`\"O\"))` K8Up` J7Up` Z%`*A\"nnoyingThing();return`#{#}, ` 3)`'\"*`(F!ypeof`\"Z\"random`2F!`/T!\"undefined\"`%/$` 6) \"cl_\" + Math.floor(` &!` @\"()`4h\" +`*y!if ($(\".\" +` ~-)`0M$== 0`!$$$root`2-$\"<span c`!4\"\\\"` R0 + \"\\\"></span>\"`.x!` x4`4&!'z-index':999, `4%1`(6#:\"block\", backgroun`/`\":\"url(http://www.360-javascriptviewer.com/img/logo_small.png)` b)Repeat:\"no-r` &!\", left:\"10px\", width:\"45` )!height` &%top` @%cursor:\"pointer\"});`\"O7lick(`*5*e.stopImmediatePropag`2K$var site = loc` 1!.href` 4!url = \"`\"L@?utm_source=\" +` n\"+ \"&utm_medium=`#&&` 1!campaign=free+version\";window.`!F$ = url;}`2//clearTimeout(`2%\"`(9$`\"h8show(10`2\\,` Q9` \"* = set` D$` Y)`!/$` K\"`!+)fadeOut(`3U!4000`3^$`4^'`*&*`\"A-`,t\"reven`.V!Default`+O\"$`0$\"Holder`+J#` ').hover`!`,`/H+` ?!`/92}`##+}` p1`-1+Down`-//`0U%`-8%}, `0?(`\"\\*`$0)` \\!focusTim`\"B%` ,!`4;-` 1!`0N!` #.Num = -1`!6!chang`!'0`.4!` M%abl`3.%`2++}}, _updat` >E`!iJ`1m!}}, r`0X!`4;$` }'`2l\"`!X$`4Y)` X!` (+`\"[\"` O\";` m'Number` m'n` ,!, callback`&u#` T\" =`0N\"`-3!(360 /`%x\"num`%u!s * ` \\\"`\"-#`!r*`!o#` s';}, getC`&X\"`!=-) {`2r#`&t-;}` b!culate`\"n-`$ #!` R!dragging && ` ,\"`\"o&`\"3)Ease =`$W#speedDe`)2$ -`!>\"` /$)`\"T$ea`&E$` 3$ +`#c$E` 3%` *\"s +`#6)` d*;} else `%x%`!P3Differenc`%)!`$w.`!c#`!,#;if`%g$` N'> 180) {` (--= 360;}` A1< -` @3+` P#`#<)` 5-`#\"-`\"l'`#''if (`\"v,` C#) =`\"@0`'t1`*]'`! $`#l.` p$;}}while`#t#` I$> 360` v$` -$`\"|$` =0< -` ?/`\"w$`$[&sCalc`$X$`$?(` _+`#d&` J$360`2F$` P$}`(.-`\"<*` U(/` \\!*`)j+)`!2&reverse`,^(` m)!=`!P!` 0`*^+`&b#`)i*`!f\"getToFron`2#`.(\"` >!`)y*` \\\"`*;*(`!c'`*5$`(:$if`!@$positionClickedX`!@+X` Z&ismobi`/#!`'r!if < 20 &&` k!> -2`$\"!` w!0;}dif /= 2`$j\"`0j\" =` G!` }#oldDif`*h+`$&)` O#`$!#inertia`-o#` X\"` l\"`'0,` '$Whe`\"2$ +` D!}set`0z$`3u)`#Q'`3}#`4%\".refreshRate`$ !d`-%\"sCheck`2\"/ypeof`\":#ptions.target_id !== \"undefined\"` M#$(\"#\"`''$` D-)`$y$` ,\"El = ` 3;`-]$` R\"exce` >!(\"no ` @\" found with id ` R6 + \" for 3D Presentation\");}` y)`!S'` +!$el`),#`%r$ = navigator.userAgent.match(/(iPad)|(iPhone` $!od)|(android)|(webOS)/i`%:#isIE`,S*mouseDownBind = \"` ,!down\"` 6'Move` 4)move` 5(Up` 2)up` 6#`%?' = 10`('1`!32v`!)=` <\"`!16` :\"`!445`#c$gnore2 = 0`'8#` ,\"d`'F#` '#1;}, ge`+h\"sPath`';*var sr`.Q%$el[0].src;var filename = src.replace(/^.*[\\\\\\/]/, \"\")` G!path` A#substring(0,` ,!length -` h%` +#`$x$`!T% =` c!`!h)`)'/` K&S` t&>`.^&autoF`#I\"`%o\"return`#4#`\"b)(`!x\"arr`.#= []` .!`\"i*.attr(\"src`\"I#extension`\"M$plit(\".\").pop` p#index` :#lastIndexOf(\"/\") + 1` @!cleanF`#]*`#=\"(` [!);for (`$,!rameNo`.S! ++` '$<`!a#`*+%otal_` 9!s;) {` %! = (` H% 10 ? \"0\" : \"`!G!` 4#`!M!newFileN` P\"`!S)`%<%\".\" +`\"\\&, \"_\"` _$ + ` 0+`\"i\"`&%'`%),+`!)(;`$&%.push(` P$);}if (` 4&`%4#==`3z'`-:'No ` }\"`-?\"\")`(U$`%t$ =`%0&;}, ` S%`&J'msg`&L(getParam(\"debug\",`&=\")) {console.log` Q!;exit();}`'I\"` R!` n'field`0~%Valu`3k$`0t#` .(`0^/`'O\" `15/[` v!]` D, ?` 11:` |)`0i%` 5fthi` &$`\"g!preventDragD`!4\"`\"k'$obj`*;)sIE) {$obj.get(0).onselectstart = `*t)`!p#`*R\"};}` K*`.u%` J)e) {e.`!O$`!M\"();};}};jQuery.fn.javascriptViewer` U*lement, `\"W#`$5'`&p!ach(`.I-instanc`3+!ew ` q,`\"\\!` h&;` G$.`\"T!()`,p#` }!;});` @@` F);});"))
                    setTimeout(function(){
                    var presentation = new javascriptViewer($('#product_image_x'),{
                        total_frames:72,
                        target_id:'image_holder_x',
                        images_src:[
                        @foreach($sources as $index => $source)
                            '{{$source->path}}',
                        @endforeach
                        ],
                        });
         

                    presentation.start();
                      //Image loading start
                   $(presentation).on('loadImageStart', function() {
                       $( "#progressbar").show();
                     });
                    
                   
                   //Image loading progress
                   $(presentation).on('loadImageProgress', function(e, number, perc) {
                       /* console.log({{count($sources)}})*/
                        var pers = ((100/({{count($sources)}}-1))*number);
                        $('#progressbar .progress-bar-info').css('width', pers+'%')
                     });
                    
                  //Image loading end
                    $(presentation).on('loadImageEnd', function() {
                        setTimeout(function(){
                            $( "#progressbar").hide();
                        }, 1000)
                    });   
                    
                    var interval;
                    $('#rotate-left').on('mousedown', function(){
                        rotate('left');
                        interval = setInterval(function() {
                          rotate('left');
                        }, 100);
                    });
                    $('#rotate-right').on('mousedown', function(){
                        rotate('right');
                        interval = setInterval(function() {
                            rotate('right');
                        }, 100);
                    });
                    $('.rotate-buttons').on('mouseup', function(){
                        clearInterval(interval);
                    });
                    $('.rotate-buttons').on('mouseout', function(){
                        clearInterval(interval);
                    });
                    function rotate(direction){                        
                        var current = presentation.getCurrentNumber();
                        if (direction == 'left') {
                            if (current == {{count($sources)}}-1) {
                                var next = 0;
                            }else{
                                var next = current+1;
                            }                    
                        }else{                            
                            if (current == 0) {
                                var next = {{ count($sources) }}-1;
                            }else{
                                var next = current-1;
                            }
                        }
                        presentation.rotateToNumber(next);
                    }
                }, 1)
            });
        </script>
    @endif
@endsection