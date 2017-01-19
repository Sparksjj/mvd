@extends('layouts.main')

@section('pageTitle', trans('layout.noSuccess'))
@section('meta_description', trans('layout.noSuccess'))
@section('meta_keywords', trans('layout.title'))
@section('og_image', '/iamges/15.png')
@section('og_type', 'article')

@section('content')

    @include('site.parts._slider')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container text-center" style="position: relative; padding: 50px 0"> 
                <div class="spacer-50"></div>
                    <i class="fa fa-lock" aria-hidden="true" style="position: absolute; left: 50%; top: 0; font-size: 200px; opacity: .2; margin-left: -65px;"></i>            
                    <span style="font-size: 20px; color: #333">{{trans('layout.noSuccess')}}</span>
                <div class="spacer-50"></div>
            </div>
        </div>
    </div>
@endsection