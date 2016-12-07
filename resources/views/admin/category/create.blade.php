@extends('layouts.admin')

@section('content')

    <div class="container"> 
        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{trans('admin.create_cat')}}</h4>
            </div>

            <div class="panel-body">
        
                    <h3 class="text-center">{{trans('admin.add_cat')}}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('categories.store') }}" method="POST" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.name')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.name')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ old('title_en') }}">
                        </div>

                        <div class="form-group">
                        
                        <label for="option">Родительская категория</label>
                            <select name="parent_id" class="form-control">
                                <option value="null">...</option>
                                @foreach ($categories as $cat) 
                                    <option value="{{ $cat->id }}">{{ $cat['title_' . Lang::getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">{{trans('admin.add_cat')}}</button>

                    </form>
                    <a href="{{route('categories.index')}}" class="help-href">{{trans('admin.all_cat')}}</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection
