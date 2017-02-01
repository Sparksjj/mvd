@extends('layouts.admin')

@section('content')
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>

    <div class="container"> 

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="">Новый видео файл</h4>
            </div>

            <div class="panel-body">
        
                    <h3 class="text-center">Новый видео файл</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('projector.video.store', $projector) }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">Название (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">Название (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ old('title_en') }}">
                        </div>

                        <div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
                            <label>Порядок воспроизведения</label>
                            <select name="position">

                                @foreach( $videos as $index => $video )
                                    <option value="{{ $index + 1 }}">{{ $index + 1 }}</option>
                                @endforeach
                                    <option value="{{ count($videos) + 1 }}" selected>{{ count($videos) + 1 }}</option>
                            </select>
                        </div>  

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="control-label">Загрузить видео файл</label>
                            <input id="input-6" name="video" type="file" class="file-loading" data-allowed-file-extensions='["ogv", "mp4", "webm", "gif", "bmp", "svg"]' value="{{ old('file') }}" required>
                        </div>
                        

                        <button type="submit" class="button btn btn-success btn-block">Создать</button>

                    </form>
                    <a href="{{route('projector.video.index', $projector)}}" class="help-href">Все видео файлы</a>
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
