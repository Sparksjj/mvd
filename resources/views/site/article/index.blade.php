@extends('layouts.main')

@section('content')
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

    @include('site.parts._slider')
<div class="spacer-50"></div>
    
    <!-- Start Body Content -->
  	<div class="main" role="main" >
    	<div id="content" class="content full">
            <div class="container breadcrumbs-wrapper">
                <a href="{{route('main.index')}}">{{trans('layout.home')}}</a>
                <span class="separator">/</span>
                <span class="breadcrumbs-current">{{trans('layout.articles')}}
                </span>
            </div>
            <div class="container all-documents-wrapper">
                <h3 class="widget-title"> {{trans('layout.articles')}} </h3>
                <div class="col-md-12 pagination-info ">

                    @if(count($articles) == 0)
                        <div class="col-sm-6">{{trans('layout.book_eror')}}</div>
                    @else
                        <div class="col-sm-6">{{trans('layout.page')}}  {{ $articles->currentPage() }} {{trans('layout.from')}}  {{ $articles->lastPage() }}</div>
                    @endif         

                </div>
                <div class="timeline-slot">
                    <ul class="slot-exhibitions">
                    @foreach($articles as $book)
                        <li class="venue1">
                            <div class="exhibition-teaser" style="padding-left: 20px">
                                <h5 class="post-title"><a href="{{route('articles.show', $book)}}" style="display: block; width: 100%">{{$book['title_' . Lang::getLocale()]}}</a></h5>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <div class="col-md-12 text-center">
                        {{ $articles->links() }}
                    </div>                    
                </div> 
                
            </div>  
            <div class="spacer-50"></div>        
        </div>
   	</div>
@endsection