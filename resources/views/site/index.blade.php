@extends('layouts.main')

@section('pageTitle', trans('layout.home'))
@section('meta_description', trans('layout.title'))
@section('meta_keywords', trans('layout.title'))
@section('og_image', '/iamges/15.png')
@section('og_type', 'article')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    @include('site.parts._slider')
    
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
            <div class="container">
            	<div class="row">
                	<div class="col-md-7 col-sm-7">
            			<h3 class="widget-title">{{trans('layout.about_title')}}</h3>
                		<p>{{trans('layout.about_text')}}</p>
                	</div>
                	<div class="col-md-5 col-sm-5">
                    	<div class="featured-block">
                            <figure>
                            	<a href="{{ route('3d.index') }}">
                                    <img src="/images/test1.jpg" alt="Learn">
                                    <span class="caption" style="text-shadow: black 0px 0px 3px;">{{trans('layout.threeD')}}</span>
                                </a>
                            </figure><!-- 
                            <p>The Vestige, museum of antiquity has a variety of year-round internship programs available for students of all ages.</p> -->
                        </div>
                    </div>
                	<!-- <div class="col-md-4 col-sm-4">
                    	<div class="featured-block">
                            <figure>
                            	<a>
                                	<img src="/images/test1.jpg" alt="Donate">
                                </a>
                            </figure>
                            <p>Our memberships provide wonderful benefits and supports our goal to preserve and conserve our local history.</p>
                        </div>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <div class="featured-block">
                            <figure>
                                <a>
                                    <img src="/images/test1.jpg" alt="Experience">
                                </a>
                            </figure>
                            <p>Our beautiful historic properties are the ideal year-round location to host your wedding or special event.</p>
                        </div>
                    </div> -->
               	</div>
            </div>
            

            <div class="spacer-50"></div>
            <!-- VISITORS SAY -->
            <div class="latest-testimonials accent-bg padding-tb45">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3">
                			<h2 class="light-title">{{trans('layout.visitors_saying')}}</h2>
                    	</div>
                    	<div class="col-md-9">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="3" data-items-tablet="1" data-items-mobile="1">
                                    <li class="item">
                                        <blockquote>
                                            <p>
                                                {{trans('layout.lorem')}}
                                            </p>
                                            <cite>Машеров Кирилл</cite>
                                        </blockquote>
                                    </li>
                                    <li class="item">
                                        <blockquote>
                                            <p>
                                                {{trans('layout.lorem')}}
                                            </p>
                                            <cite>Машеров Кирилл</cite>
                                        </blockquote>
                                    </li>
                                    <li class="item">
                                        <blockquote>
                                            <p>
                                                {{trans('layout.lorem')}}
                                            </p>
                                            <cite>Машеров Кирилл</cite>
                                        </blockquote>
                                    </li>
                                </ul>
                          	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div> 
@endsection