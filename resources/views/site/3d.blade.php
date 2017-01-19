@extends('layouts.main')

@section('pageTitle', trans('layout.threeD'))
@section('meta_description', trans('layout.title'))
@section('meta_keywords', trans('layout.title'))
@section('og_image', '/iamges/15.png')
@section('og_type', 'article')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    @include('layouts.MVD')
@endsection