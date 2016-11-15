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
                        
                        <div class="form-group {{ $errors->has('name_ru') ? 'has-error' : '' }}">
                            <label for="name_ru">{{trans('admin.name')}} (рус.)</label>
                            <input type="text" class="form-control" id="name_ru" name="name_ru" required value="{{ old('name_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('name_en') ? 'has-error' : '' }}">
                            <label for="name_en">{{trans('admin.name')}} (en.)</label>
                            <input type="text" class="form-control" id="name_en" name="name_en" required value="{{ old('name_en') }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">{{trans('admin.add_cat')}}</button>

                    </form>
                    <a href="{{route('categories.index')}}" class="help-href">{{trans('admin.all_cat')}}</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection
