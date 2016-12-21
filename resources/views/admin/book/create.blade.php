@extends('layouts.admin')

@section('content')

    <div class="container"> 

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="">Новая книга</h4>
            </div>

            <div class="panel-body">
        
                    <h3 class="text-center">Новая книга</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">Название (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">Название (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ old('title_en') }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Создать</button>

                    </form>
                    <a href="{{route('book.index')}}" class="help-href">Все книги</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection
