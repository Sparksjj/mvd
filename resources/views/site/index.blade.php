@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->


    <div class="hero-area">
    	<!-- Start Hero Slider -->
      	<div class="slider-rev-cont">
          	<div class="tp-banner-container">
            	<div class="tp-banner">
            		<ul style="display:none;">
                		<!-- SLIDE  -->
                    	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000"  data-saveperformance="off"  data-title="Slide 1">
                        	<!-- MAIN IMAGE -->
                        	<img src="http://placehold.it/1400x600&amp;text=IMAGE+PLACEHOLDER"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        	<!-- LAYERS -->
                
                        	<!-- LAYER NR. 1 -->
                        	<div class="tp-caption light_heavy_60 sfb rtt tp-resizeme"
                            	data-x="left" data-hoffset="20"
                            	data-y="center" data-voffset="0"
                            	data-speed="600"
                            	data-start="800"
                            	data-easing="Power4.easeOut"
                            	data-splitin="none"
                            	data-splitout="none"
                            	data-elementdelay="0.01"
                            	data-endelementdelay="0.1"
                            	data-endspeed="500"
                            	data-endeasing="Power4.easeIn"
                            	style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Dive in to the Aquarium
                        	</div>
                
                        	<!-- LAYER NR. 2 -->
                        	<div class="tp-caption light_medium_30_shadowed sfb rtt tp-resizeme"
                            	data-x="left" data-hoffset="20"
                            	data-y="center" data-voffset="70"
                            	data-speed="600"
                            	data-start="900"
                            	data-easing="Power4.easeOut"
                            	data-splitin="none"
                            	data-splitout="none"
                            	data-elementdelay="0.01"
                            	data-endelementdelay="0.1"
                            	data-endspeed="500"
                            	data-endeasing="Power4.easeIn"
                            	style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Explore the astonishing world of the fishes.
                        	</div>
                    	</li>
                		<!-- SLIDE  -->
                    	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000"  data-saveperformance="off"  data-title="Slide 2">
                        	<!-- MAIN IMAGE -->
                        	<img src="http://placehold.it/1400x600&amp;text=IMAGE+PLACEHOLDER"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        	<!-- LAYERS -->
                
                        	<!-- LAYER NR. 1 -->
                        	<div class="tp-caption light_medium_20_shadowed sfb rtt tp-resizeme"
                            	data-x="left" data-hoffset="20"
                            	data-y="bottom" data-voffset="-80"
                            	data-speed="600"
                            	data-start="800"
                            	data-easing="Power4.easeOut"
                            	data-splitin="none"
                            	data-splitout="none"
                            	data-elementdelay="0.01"
                            	data-endelementdelay="0.1"
                            	data-endspeed="500"
                            	data-endeasing="Power4.easeIn"
                            	style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">ERBALUNGA
                        	</div>
                
                        	<!-- LAYER NR. 2 -->
                        	<div class="tp-caption small_light_white sfb rtt tp-resizeme"
                            	data-x="left" data-hoffset="20"
                            	data-y="bottom" data-voffset="-50"
                            	data-speed="600"
                            	data-start="900"
                            	data-easing="Power4.easeOut"
                            	data-splitin="none"
                            	data-splitout="none"
                            	data-elementdelay="0.01"
                            	data-endelementdelay="0.1"
                            	data-endspeed="500"
                            	data-endeasing="Power4.easeIn"
                            	style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">old village in Corsica, artwork in painting style
                        	</div>
                    	</li>
                    	<!-- SLIDE  -->
                    	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb=""  data-saveperformance="off"  data-title="Slide 3">
                        	<!-- MAIN IMAGE -->
                       		<img src="http://placehold.it/1400x600&amp;text=IMAGE+PLACEHOLDER"  alt="fullslide2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        	<!-- LAYERS -->
                
                        	<!-- LAYER NR. 1 -->
                        	<div class="tp-caption light_medium_20_shadowed sfb rtt tp-resizeme"
                            	data-x="left" data-hoffset="20"
                            	data-y="bottom" data-voffset="-40"
                            	data-speed="600"
                            	data-start="800"
                            	data-easing="Power4.easeOut"
                            	data-splitin="none"
                            	data-splitout="none"
                            	data-elementdelay="0.01"
                            	data-endelementdelay="0.1"
                            	data-endspeed="500"
                            	data-endeasing="Power4.easeIn"
                            	style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Vintage Hand Drawn View<br>of Lions Bridge in Budapest
                        	</div>
                    	</li>
                	</ul>	
                	<div class="tp-bannertimer" style="display:none;"></div>	
            	</div>
        	</div>
      	</div>
        <!-- End Hero Slider -->
    </div>
    <!-- Notive Bar -->
    <div class="notice-bar">
      	<div class="container">
        	<div class="row">
            	<div class="col-lg-9 col-md-8 col-sm-8">
        			<p class="lead">Planning to visit Vestige? Look at the timetable for the upcoming exhibitions.</p>
                </div>
            	<div class="col-lg-3 col-md-4 col-sm-4">
    				<a href="#" class="btn btn-primary">View Exhibitions Timetable</a>
              	</div>
           	</div>
        </div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
            <div class="container">
            	<div class="row">
                	<div class="col-md-3 col-sm-6">
            			<h3 class="widget-title">GET INVOLVED</h3>
                		<p>We want you to be part of our museums, experience its beauty and this is why we offer several ways to let you engage with us to help maintain and develop the museums. Whether you are a student aspiring a career in social work or a business person who loves to preserve and care about the ocal history or a couple looking to get married in an awesome traditional way. We have everything for all of you. Become a member today!</p>
                	</div>
                	<div class="col-md-3 col-sm-6">
                    	<div class="featured-block">
                            <figure>
                            	<a href="#">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="Learn">
                                    <span class="caption">Learn</span>
                                </a>
                            </figure>
                            <p>The Vestige, museum of antiquity has a variety of year-round internship programs available for students of all ages.</p>
                            <a href="#" class="basic-link">Inernship programs</a>
                        </div>
                    </div>
                	<div class="col-md-3 col-sm-6">
                    	<div class="featured-block">
                            <figure>
                            	<a href="#">
                                	<img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="Donate">
                                	<span class="caption">Donate</span>
                                </a>
                            </figure>
                            <p>Our memberships provide wonderful benefits and supports our goal to preserve and conserve our local history.</p>
                            <a href="#" class="basic-link">Ways to support</a>
                        </div>
                    </div>
                	<div class="col-md-3 col-sm-6">
                    	<div class="featured-block">
                            <figure>
                            	<a href="#">
                                    <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="Experience">
                                    <span class="caption">Experience</span>
                                </a>
                            </figure>
                            <p>Our beautiful historic properties are the ideal year-round location to host your wedding or special event.</p>
                            <a href="#" class="basic-link">Rental options</a>
                        </div>
                    </div>
               	</div>
            </div>
            
            <div class="spacer-50"></div>
            <div class="dgray-bg">
            	<div class="skewed-title-bar">
                	<div class="container">
                        <h4>
                            <span>Our Venues</span>
                        </h4>
                    </div>
                </div>
                <div class="padding-tb45">
                    <div class="container">
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="venues-slider" data-columns="3" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="2" data-items-mobile="1">
                                    <li class="item">
                                		<div class="featured-block featured-block-secondary format-standard">
                                            <figure>
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                            </figure>
                                            <div class="featured-block-in">
                                            	<h3><a href="#">Accrue Homestead</a></h3>
                                            	<p>This hitoric house was built way back in 1700 and since then it's been awarded several time for its extraordinary beauty...</p>
                                            </div>
                                        </div>
                            		</li>
                                    <li class="item">
                                		<div class="featured-block featured-block-secondary format-standard">
                                            <figure>
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                            </figure>
                                            <div class="featured-block-in">
                                            	<h3><a href="#">Mehar Mansion</a></h3>
                                            	<p>Mansion with 14 historical building is the place to visit in Vestige, the architecture behind the buildings...</p>
                                            </div>
                                        </div>
                            		</li>
                                    <li class="item">
                                		<div class="featured-block featured-block-secondary format-standard">
                                            <figure>
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                            </figure>
                                            <div class="featured-block-in">
                                            	<h3><a href="#">Shop pleu</a></h3>
                                            	<p>The Vestige, new museum of antiquity has a variety of year-round internship programs available for students of all ages.</p>
                                            </div>
                                        </div>
                            		</li>
                                    <li class="item">
                                		<div class="featured-block featured-block-secondary format-standard">
                                            <figure>
                                                <a href="#" class="media-box">
                                                    <img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt="">
                                                </a>
                                            </figure>
                                            <div class="featured-block-in">
                                            	<h3><a href="#">Mehar Mansion</a></h3>
                                            	<p>The Vestige, new museum of antiquity has a variety of year-round internship programs available for students of all ages.</p>
                                            </div>
                                        </div>
                            		</li>
                              	</ul>
                          	</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-50"></div>
            
            <div class="container">
            	<div class="row">
                	<div class="col-md-8">
                    	<!-- Coming Exhibitions -->
                        <div class="widget widget_upcoming_exhibitions">
                        	<h3 class="widget-title">Coming Exhibitions</h3>
                            <div class="exhibitions-timeline">
                                <div class="timeline-stamp">
                                	<div class="timeline-stamp-table">
                                		<div class="timeline-stamp-tablecell">
                                    		<div class="timeline-stamp-in">
                                    			<span class="label label-default">Today</span>
                                        		<span class="timeline-stamp-day">23</span>
                                        		<span class="timeline-stamp-month">April, 2015</span>
                                    		</div>
                                    	</div>
                                    </div>
                                </div>
                                <div class="timeline-slot">
                                    <ul class="slot-exhibitions">
                                        <li class="venue1">
                                            <span class="exhibition-time">04:00 pm</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">A new version: Modernist Photography</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Now Open</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Accrue Homestead</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                        <li class="venue2">
                                            <span class="exhibition-time">05:30 pm</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">Swedish photography from Chris until today</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Extended until 12 July 2015</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Mehar mansion</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                        <li class="venue1">
                                            <span class="exhibition-time">07:00 pm</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">Abstract expressionist New York</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Opening 23 April 2015</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Mehar mansion</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                    </ul>
                                </div>
                           	</div>
                            
                            <div class="exhibitions-timeline">
                                <div class="timeline-stamp">
                                	<div class="timeline-stamp-table">
                                		<div class="timeline-stamp-tablecell">
                                    		<div class="timeline-stamp-in">
                                        		<span class="timeline-stamp-day">24</span>
                                        		<span class="timeline-stamp-month">April, 2015</span>
                                    		</div>
                                    	</div>
                                    </div>
                                </div>
                                <div class="timeline-slot">
                                    <ul class="slot-exhibitions">
                                        <li class="venue1">
                                            <span class="exhibition-time">09:00 am</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">A new version: Modernist Photography</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Closing soon</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Accrue Homestead</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                        <li class="venue1">
                                            <span class="exhibition-time">12:00 pm</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">Abstract expressionist New York</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Until 25 May 2015</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Accrue Homestead</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                        <li class="venue2">
                                            <span class="exhibition-time">05:30 pm</span>
                                            <div class="exhibition-teaser">
                                                <h5 class="post-title"><a href="#">Swedish photography from Chris until today</a></h5>
                               					<div class="meta-data alt">
                                                	<div><i class="fa fa-clock-o"></i> Opening 23 April 2015</div>
                                					<div><a href="venue-single.html"><i class="fa fa-map-marker"></i> Mehar mansion</a></div>
                                               	</div>
                                           	</div>
                                        </li>
                                    </ul>
                                </div>
                           	</div>
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-md-4">
                    	<!-- Widget Special Events -->
                        <div class="widget widget_special_events">
                        	<h3 class="widget-title">Special Events</h3>
                            <div class="widget_special_events_in">
                            
                            	<div class="event-item format-standard">
                                	<a href="#" class="media-box event-featured-img"><img src="http://placehold.it/600x300&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                	<div class="meta-data alt">
                                    	<div>May 20, 2015</div>
                                        <div><a href="#">Shop Pleu</a></div>
                                    </div>
                                    <h3 class="post-title"><a href="#">An Artist Combing the Shores of Time</a></h3>
                                    <a href="#" class="basic-link">View details</a>
                                </div>
                                
                            	<div class="event-item format-standard">
                                	<div class="meta-data alt">
                                    	<div>June 01, 2015</div>
                                        <div><a href="#">Shop Pleu</a></div>
                                    </div>
                                    <h3 class="post-title"><a href="#">We Come This Far by Faith</a></h3>
                                    <a href="#" class="basic-link">View details</a>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Latest Blog Posts -->
            <div class="spacer-50"></div>
            <div class="lgray-bg padding-tb45">
            	<div class="container">
                	<h3 class="widget-title text-align-center">In the news</h3>
                   	<div class="carousel-wrapper">
                        <div class="row">
                       		<ul class="owl-carousel carousel-fw" id="news-slider" data-columns="4" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <!-- BLOG ITEM -->
                                <li class="item">
                                    <div class="grid-item format-standard">
                                        <a href="#" class="media-box grid-featured-img">
                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            <span class="grid-item-date">
                                                <span class="grid-item-day">15</span>
                                                <span class="grid-item-month">Apr</span>
                                            </span>
                                        </a>
                                        <div class="grid-item-content">
                                            <h3><a href="#">Nulla convallis egestas rhoncus</a></h3>
                                            <div class="grid-item-excerpt">
                                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                            </div>
                                            <a href="#" class="pull-right basic-link">Read more</a>
                                            <div class="meta-data grid-item-meta">
                                                <a href="#"><i class="fa fa-comments-o"></i> 36 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- BLOG ITEM -->
                                <li class="item">
                                    <div class="grid-item format-standard">
                                        <a href="#" class="media-box grid-featured-img">
                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            <span class="grid-item-date">
                                                <span class="grid-item-day">14</span>
                                                <span class="grid-item-month">Apr</span>
                                            </span>
                                        </a>
                                        <div class="grid-item-content">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
                                            <div class="grid-item-excerpt">
                                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem.</p>
                                            </div>
                                            <a href="#" class="pull-right basic-link">Read more</a>
                                            <div class="meta-data grid-item-meta">
                                                <a href="#"><i class="fa fa-comments-o"></i> 105 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- BLOG ITEM -->
                                <li class="item">
                                    <div class="grid-item format-standard">
                                        <a href="#" class="media-box grid-featured-img">
                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            <span class="grid-item-date">
                                                <span class="grid-item-day">11</span>
                                                <span class="grid-item-month">Apr</span>
                                            </span>
                                        </a>
                                        <div class="grid-item-content">
                                            <h3><a href="#">Happy holidays to everyone!</a></h3>
                                            <div class="grid-item-excerpt">
                                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                            </div>
                                            <a href="#" class="pull-right basic-link">Read more</a>
                                            <div class="meta-data grid-item-meta">
                                                <a href="#"><i class="fa fa-comments-o"></i> 176 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- BLOG ITEM -->
                                <li class="item">
                                    <div class="grid-item format-standard">
                                        <a href="#" class="media-box grid-featured-img">
                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            <span class="grid-item-date">
                                                <span class="grid-item-day">09</span>
                                                <span class="grid-item-month">Apr</span>
                                            </span>
                                        </a>
                                        <div class="grid-item-content">
                                            <h3><a href="#">Potter working a piece of clay</a></h3>
                                            <div class="grid-item-excerpt">
                                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                            </div>
                                            <a href="#" class="pull-right basic-link">Read more</a>
                                            <div class="meta-data grid-item-meta">
                                                <a href="#"><i class="fa fa-comments-o"></i> 234 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- BLOG ITEM -->
                                <li class="item">
                                    <div class="grid-item format-standard">
                                        <a href="#" class="media-box grid-featured-img">
                                            <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            <span class="grid-item-date">
                                                <span class="grid-item-day">11</span>
                                                <span class="grid-item-month">Apr</span>
                                            </span>
                                        </a>
                                        <div class="grid-item-content">
                                            <h3><a href="#">Happy holidays to everyone!</a></h3>
                                            <div class="grid-item-excerpt">
                                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                           	</div>
                                            <a href="#" class="pull-right basic-link">Read more</a>
                                            <div class="meta-data grid-item-meta">
                                                <a href="#"><i class="fa fa-comments-o"></i> 36 Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           	</ul>
                        </div>
                   	</div>
                </div>
            </div>
            <!-- VISITORS SAY -->
            <div class="latest-testimonials accent-bg padding-tb45">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3">
                			<h2 class="light-title">What our visitors saying about their experience</h2>
                    	</div>
                    	<div class="col-md-9">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="3" data-items-tablet="1" data-items-mobile="1">
                                    <li class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam .</p>
                                            <cite>Ruth Lawson</cite>
                                        </blockquote>
                                    </li>
                                    <li class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                            <cite>Hannah Hunter</cite>
                                        </blockquote>
                                    </li>
                                    <li class="item">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                            <cite>Teresa Barrett</cite>
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