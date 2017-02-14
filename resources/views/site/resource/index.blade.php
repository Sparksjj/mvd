@extends('layouts.main')

@section('pageTitle', trans('layout.resources'))
@section('meta_description', trans('layout.title'))
@section('meta_keywords', trans('layout.title'))
@section('og_image', '/images/15.png')
@section('og_type', 'article')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    @include('site.parts._slider')

    <style>
        .pre_img{
            width: auto;
            height: 60px;
            padding-right: 10px;
            display: inline-block;
            float: left;
            width: 70px;
            position: relative;
        }
        .pre_img img{
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .all-documents-wrapper .exhibition-time{
            margin-top: 15px;
        }
        .title_doc{
            margin-left: 70px;
            display: block;
        }
        @media only screen and (max-width: 767px){            
            .title_doc{
                margin-left: 0px;
                clear: both;
            }
            .exhibition-teaser{
                padding-left: 0;
            }
            .pre_img{
                float: right;
            }
        }
    </style>
    <!-- Start Body Content -->
  	<div class="main" role="main" >
    	<div id="content" class="content full">
            <div class="container breadcrumbs-wrapper">
                <a href="{{route('main.index')}}">{{trans('layout.home')}}</a>
                <span class="separator">/</span>
                <span class="breadcrumbs-current">{{trans('layout.documents')}}
                </span>
            </div>
            <div class="container all-documents-wrapper">
                <h3 class="widget-title"> {{trans('layout.documents')}} </h3>
                <div class="col-md-12 pagination-info ">
                    @if(count($documents) == 0)
                        <div class="col-sm-6">{{trans('layout.search_error')}}</div>
                    @else
                    <div class="col-sm-6">{{trans('layout.page')}}  {{ $documents->currentPage() }} {{trans('layout.from')}}  {{ $documents->lastPage() }}</div>
                    @endif
                    @include('site.resource.parts._searchForm')           

                </div>
                <div class="timeline-slot">
                    <ul class="slot-exhibitions">
                    @foreach($documents as $document)
                        <li class="venue1">
                            <span class="exhibition-time">{{$document->type}}</span>
                            <div class="exhibition-teaser">
                                <h5 class="post-title">
                                    <a href="{{route('resource.show', $document)}}">
                                        <div class="pre_img">
                                            @if($document->type == 'pdf')
                                                <img src="/images/pdf_preload.png" alt="">
                                            @elseif(!$document->sources()->first()['path'])
                                                <img src="/images/no_img_preload.png" alt="">
                                            @else
                                                <img src="{{$document->sources()->first()['path']}}" alt="">
                                            @endif                                            
                                        </div>

                                        <span class="title_doc">{{$document['title_' . Lang::getLocale()]}}</span>
                                    </a>
                                </h5>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <div class="col-md-12 text-center">
                        {{ $documents->links() }}
                    </div>                    
                </div> 
                
            </div>  
            <div class="spacer-50"></div>        
        </div>
   	</div>
@endsection