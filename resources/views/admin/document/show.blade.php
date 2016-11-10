@extends('layouts.admin')

@section('content')

<script src='/uploader3/js/fileinput.min.js'></script>
<link src='/uploader3/css/fileinput.min.css' rel="stylesheet">

    <div class="container">    


                    @include('admin.parts._formErorr')

                     <form class="" action="{{ route('adminBlog.store') }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">Заголовок (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">Заголовок (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ old('title_en') }}">
                        </div>

                        <div class="form-group {{ $errors->has('og_type') ? 'has-error' : '' }}">
                            <label for="og_type">Category</label>
                            <select name="og_type">
                                <option value="article" selected>article</option>
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="control-label">Загрузить документ</label>
                            <input id="input-7" name="image" type="file" class="file-loading" data-allowed-file-extensions='["png", "jpg", "png", "gif", "bmp", "svg"]' value="{{ old('file') }}">
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Добавить запись</button>

                    </form>

                    <div class='single-big'></div>
                </main>

                @include('admin.parts._sitebar')

            </div><!--end container-->
        </div><!-- close default .container_wrap element -->

        <script>

            setTimeout(function() {
                jQuery("#input-7").fileinput({
                    showUpload: false,
                    mainClass: "input-group"
                });
            },1000);

        </script>
    </div>
@endsection
