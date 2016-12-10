@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    @include('site.parts._slider')
        
    <!-- Start Body Content -->
  	<div class="main" role="main" >
    	<div id="content" class="content full">
            <div class="col-md-12 breadcrumbs-wrapper">
                <a href="{{route('main.index')}}">{{trans('layout.home')}}</a>
                <span class="separator">/</span>
                <span class="breadcrumbs-current">{{trans('layout.documents')}} {{trans('layout.on_request')}} "{{$key}}"
                </span>
            </div>
            <div class="container all-documents-wrapper">
                <h3 class="widget-title">{{trans('layout.documents')}} {{trans('layout.on_request')}} "{{$key}}"</h3>
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
                                <h5 class="post-title"><a href="{{route('resource.show', $document)}}">{{$document['title_' . Lang::getLocale()]}}</a></h5>
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