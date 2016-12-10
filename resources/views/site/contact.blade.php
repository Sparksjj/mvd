@extends('layouts.main')

@section('content')
    @include('site.parts._slider')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                    @if(!session('status'))
                        <h4 class="accent-color short">Thanks for your visit</h4>
                        <h2>We would love to hear abour your experience and suggestions</h2>
                        <div class="spacer-20"></div>
                        <form action="{{route('contacts.sendEmail')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <input name="submit" type="submit" class="btn btn-primary btn-lg pull-left" value="Submit now!">
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                        <form method="post" class="contact-form clearfix" action="{{route('contacts.sendEmail')}}">
                        @else 
                            <div class="avia_message_box {{ session('type') }} avia-size-large avia-icon_select-yes avia-border- avia-builder-el-0 el_before_av_notification avia-builder-el-first">
                                <div class="avia_message_box_content text-center">
                                    <div class="alert {{ session('type') }}" role="alert"><i class="fa fa-check" aria-hidden="true"></i> {{ trans(session('status')) }}</div>
                                </div>
                            </div>
                        @endif
                        <div class="clearfix"></div>
                        <div class="spacer-50"></div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="widget sidebar-widget widget_map box-style1">
                            <div id="contact-map" style="width:100%;height:300px">
                                {!!Mapper::render()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                {!!$contact['content_' . Lang::getLocale()]!!}
                <div class="spacer-50"></div>
            </div>
        </div>
    </div>
@endsection