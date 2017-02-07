@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<style>
	.flex-next,
	.flex-prev{
		display: block !important;
	}
	body > div > div.topbar > div > div > div.col-md-6.col-sm-6.col-xs-12.text-right > div.text-right.col-xs-7,
	.site-header-wrapper,
	footer.site-footer{
		display: none;
	}
	body > div > div.topbar > div > div > div.col-md-6.col-sm-6.col-xs-12.text-right > div.col-sm-4{
		float: right;
	}
	body,
	blockquote p{
		color: #333;
	}
</style>
<div class="main" role="main">
	<div id="content" class="content full single-post">
		<div class="container">

			<header class="single-post-header clearfix">
					<h1 class="post-title">{{ $article['title_'.Lang::getLocale()] }}</h1>
			</header>

			@if(count($sl_images) > 0)
	    	<div class="spacer-25"></div> 
			
	    	<div class="row">
	            <ul class="sort-destination isotope" data-sort-id="gallery">
	                <li class="col-md-12 grid-item format-gallery galleries">
	                    <div class="grid-item-inner">
	                        <div class="media-box">
	                            <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="slide" data-pause="yes">
	                                <ul class="slides">
	                                	@foreach($sl_images as $image)
	                                    <li class="item">
	                                    	<a href="{{$image->src}}" data-rel="prettyPhoto[postname]">
	                                    		<img src="{{$image->src}}" alt="" style="display: block; margin: 0 auto">
	                                    	</a>
	                                    </li>
	                                    @endforeach
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	            </ul>
	       	</div>
			
			<div class="spacer-25"></div> 
			@endif

			<article class="post-content">
				{!! $article['content_'.Lang::getLocale()] !!}
			</article>
			<div class="spacer-50"></div> 
		</div>
	</div>
</div>
@endsection