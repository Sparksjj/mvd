@extends('layouts.admin')

@section('content')
    <div class="container"> 

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">Изменить книгу</h4>
                </div>

                <div class="panel-body">
            
                    <h3 class="text-center">{{ $book['title_' . Lang::getLocale()] }}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $book->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ $book->title_en }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Изменить</button>

                    </form>

                    <a href="{{route('book.index')}}" class="help-href">Все книги</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection