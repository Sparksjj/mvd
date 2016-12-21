@extends('layouts.admin')

@section('content')
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <div class="container"> 
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Изменить видео в проекторе {{$projector['title_' . Lang::getLocale()]}}</h4>
                </div>

                <div class="panel-body">

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('projector.video.update', [$projector, $video]) }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $video->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ $video->title_en }}">
                        </div>

                        <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                            <label>Номер страницы</label>
                            <select name="position">

                                @foreach( $videos as $index => $v )
                                    <option value="{{ $index + 1 }}" @if($index+1 == $video->position) selected @endif>{{ $index + 1 }}</option>
                                @endforeach

                            </select>
                        </div>  

                        <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                            <label class="control-label">Заменить видео файл</label>
                            <input id="input-6" name="video" type="file" class="file-loading" data-allowed-file-extensions='["ogv", "mp4", "webm", "gif", "bmp", "svg"]' value="{{ old('video') }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Изменить</button>

                    </form>
                    <a href="{{ route('projector.video.index', $projector) }}" class="help-href">Все видеофайлы в проекторе</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
    <script>
            setTimeout(function() {
                jQuery("#input-6").fileinput({
                    showUpload: false,
                    mainClass: "input-group"
                });
            },1000);

    </script>
@endsection
