@extends('layouts.admin')

@section('content')

    <div class="container">   
        @include('admin.parts._tree_category')
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Просмотр документа</h4>
                </div>

                <div class="panel-body">

                    
                    <a href="{{route('documents.index')}}" class="help-href">Все документы</a>

                    <div class="col-xs-12 contoll_buttons">                    

                        <div class="col-xs-6">
                            <a href="{{route('documents.edit', $document)}}">Изменить</a>
                        </div>
                        <div class="col-xs-6">
                            <form action="{{ route('documents.destroy', $document) }}" method="POST" class="destroy-news">
                                {{ csrf_field() }}

                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="button button-red">
                                    <i class="fa fa-times" aria-hidden="true"></i> Удалить
                                </button>

                            </form>
                        </div>

                    </div>
                    <h3 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h3>        
                    <iframe src="{{ $document->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%; height: 700px;"></iframe>
                </div>

            </div>
        </div>
    </div>
@endsection
