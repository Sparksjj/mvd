@extends('layouts.admin')

@section('content')

    <div class="container"> 
        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{trans('admin.create_doc')}}</h4>
            </div>

            <div class="panel-body">
        
                    <h3 class="text-center">{{trans('admin.add_doc')}}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ old('title_en') }}">
                        </div>

                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label for="category">{{trans('admin.category')}}</label>
                            <select name="category">

                                @foreach( $categories as $index => $category )
                                    <option value="{{$category->id}}" @if($category->id == $from_category['id']) selected @endif>{{ $category['name_' . Lang::getLocale() ]}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="control-label">Загрузить документ</label>
                            <input id="input-7" name="document" type="file" class="file-loading" data-allowed-file-extensions='["pdf"]' value="{{ old('file') }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">{{trans('admin.add_doc')}}</button>

                    </form>
                    <a href="{{route('documents.index')}}" class="help-href">{{trans('admin.all_doc')}}</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->

    <script>
        setTimeout(function() {
            $("#input-7").fileinput({
                showUpload: false,
                mainClass: "input-group",
                initialPreviewAsData: true,
            });
            var contentHeight = $(window).height() - $('#page-wrapper .footer').outerHeight(true) - $('#page-wrapper .navigation').outerHeight(true);
            $('#content-wrapper').css('min-height', contentHeight);
        },1000);

    </script>
@endsection
