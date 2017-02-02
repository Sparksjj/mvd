@extends('layouts.admin')

@section('content')

    <div class="container">   

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Статья "{{$article['title_' . Lang::getLocale()]}}"</h4>
                </div>

                <div class="panel-body">
                    
                    
                    <a href="{{route('adminarticle.index')}}" class="help-href">Все статьи</a>

                    <div class="col-xs-12 contoll_buttons">                    

                        <div class="col-xs-6">
                            <a href="{{route('adminarticle.edit', $article)}}">{{trans('admin.update')}}</a>
                        </div>
                        <div class="col-xs-6">
                            <form action="{{ route('adminarticle.destroy', $article) }}" method="POST" class="destroy-news">
                                {{ csrf_field() }}

                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="button button-red">
                                    <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                </button>

                            </form>
                        </div>

                    </div>

					<div class="clearfix"></div>
                    <div class="container">
                        {!! $article['content_' . Lang::getLocale()] !!}
                    </div>    
                </div>

            </div>
        </div>
    </div>

@endsection
