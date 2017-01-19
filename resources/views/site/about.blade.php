@extends('layouts.main')

@section('pageTitle', trans('layout.about'))
@section('meta_description', trans('layout.about_text'))
@section('meta_keywords', trans('layout.title'))
@section('og_image', '/iamges/15.png')
@section('og_type', 'article')

@section('content')

    @include('site.parts._slider')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">             
                    {!!$about['content_' . Lang::getLocale()]!!}
                <div class="spacer-50"></div>
            </div>
        </div>
    </div>
@endsection