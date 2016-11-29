@extends('layouts.main')

@section('content')


    <div class="hero-area">
        <div class="page-header parallax" style="background-image:url(http://placehold.it/1200x300&amp;text=IMAGE+PLACEHOLDER)"><div><div><span>Contact Us</span></div></div></div>
    </div>
    <!-- Notive Bar -->
    <div class="notice-bar">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h4 class="accent-color short">Thanks for your visit</h4>
                        <h2>We would love to hear abour your experience and suggestions</h2>
                        <div class="spacer-20"></div>
                        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="widget sidebar-widget widget_map box-style1">
                            <div id="contact-map" style="width:100%;height:200px">
                                {!!Mapper::render()!!}
                            </div>
                        </div>
                        <div class="widget sidebar-widget box-style1">
                            <h3 class="widget-title">Our Locations</h3>
                            <address>
                                <a href="venue-single.html"><strong>Accrue Homestead</strong></a><br>
                                <span>158 Marion Street<br>
                                Columbia, SC 29201</span>
                            </address>
                            <hr>
                            <address>
                                <a href="venue-single.html"><strong>Mehar Mansion</strong></a><br>
                                <span>158 Marion Street<br>
                                Columbia, SC 29201</span>
                            </address>
                            <hr>
                            <address>
                                <a href="venue-single.html"><strong>Shop Pleu</strong></a><br>
                                <span>158 Marion Street<br>
                                Columbia, SC 29201</span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection