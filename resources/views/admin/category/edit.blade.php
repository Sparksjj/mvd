@extends('layouts.admin')

@section('content')

    <div class="container"> 
        @include('admin.parts._tree_category')
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">{{trans('admin.update_cat')}}</h4>
                </div>

                <div class="panel-body">
            
                    <h3 class="text-center">{{ $category['title_' . Lang::getLocale()] }}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('categories.update', $category) }}" method="POST" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.name')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $category->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.name')}} (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ $category->title_en }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">{{trans('admin.update_cat')}}</button>

                    </form>
                    <a href="{{route('categories.index')}}" class="help-href">{{trans('admin.all_cat')}}</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection
