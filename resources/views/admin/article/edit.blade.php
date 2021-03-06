@extends('layouts.admin')

@section('content')
<script src='/tinymce/js/tinymce/tinymce.min.js'></script>
    <div class="container"> 
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Изменить статью {{$article['title_'.Lang::getLocale()]}}</h4>
                </div>

                <div class="panel-body">

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('adminarticle.update', $article) }}" method="POST" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $article->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $article->title_en }}">
                        </div>                       
                        
                        <div class="form-group {{ ($errors->has('content_ru') || $errors->has('content_en')) ? 'has-error' : '' }}">
                            <label>Контент</label>
                            <div>
                                
                                <ul class="nav nav-tabs textarea" role="tablist">

                                    <li class="active" data-toggle="ru" data-point="#content-wrapper">
                                        Русский
                                    </li>

                                    <li data-toggle="ru" data-point="#content-wrapper">
                                        English
                                    </li>

                                </ul>
                                
                                <div class="tab-content" id="content-wrapper">
                                    <div role="tabpanel" class="tab-pane active" id="content_ru-wrapper">
                                        <textarea name="content_ru" class="form-control" id="content_ru">{{$article->content_ru}}</textarea>
                                        <input type="file" name="content_img_ru" id="content_img_ru" style="display:none">
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="content_en-wrapper">
                                        <textarea name="content_en" class="form-control" id="content_en">{{$article->content_en}}</textarea>
                                        <input type="file" name="content_img_en" id="content_img_en" style="display:none">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Изменить</button>

                    </form>
                    <a href="{{ route('adminarticle.index') }}" class="help-href">Все статьи</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
    <script>
            tinymce.init({
                cleanup: false,
                valid_elements: '*[*]',
                language:"ru",    
                selector: '#content_ru',
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],


                //content_css: '{{ url ("assets/css/content.css") }}',
                editor_selector : "mceAdvanced",
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',

                automatic_uploads: true,

                file_browser_callback_types: 'file image media',

                relative_urls : false,

                convert_urls : false,

                file_browser_callback: function(field_name, url, type, win) {

                var hidden_field = document.getElementById("content_img_ru");
                console.log(hidden_field.files[0])
                hidden_field.click();

                hidden_field.onchange = function(e) {
                    if (hidden_field.value) {

                        var blobFile = hidden_field.files[0];
                        var formData = new FormData();
                        formData.append("fileToUpload", blobFile);

                        jQuery.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        });

                        jQuery.ajax({
                            type: 'POST',
                            url: "{{ route('uploadImage') }}",
                            data: formData,
                            contentType: false,
                            processData: false,
                            async: false,
                            cache: false,

                            success: function(msg) {
                                console.log(msg);
                                document.getElementById(field_name).value = msg;
                            },

                            error: function(jqXHR, textStatus, errorMessage) {
                                console.log(errorMessage);
                            },
                        });

                    }

                };

            },

            });

            tinymce.init({
                cleanup: false,
                valid_elements: '*[*]',
                language:"ru",    
                selector: '#content_en',
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],
                //content_css: '{{ url ("assets/css/content.css") }}',
                editor_selector : "mceAdvanced",
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',

                automatic_uploads: true,

                file_browser_callback_types: 'file image media',

                relative_urls : false,

                convert_urls : false,                
                file_browser_callback: function(field_name, url, type, win) {

                var hidden_field = document.getElementById("content_img_en");
                hidden_field.click();

                hidden_field.onchange = function(e) {
                    if (hidden_field.value) {

                        var blobFile = hidden_field.files[0];
                        var formData = new FormData();
                        formData.append("fileToUpload", blobFile);

                        jQuery.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        });

                        jQuery.ajax({
                            type: 'POST',
                            url: "{{ route('uploadImage') }}",
                            data: formData,
                            contentType: false,
                            processData: false,
                            async: false,
                            cache: false,

                            success: function(msg) {
                                console.log(msg);
                                document.getElementById(field_name).value = msg;
                            },

                            error: function(jqXHR, textStatus, errorMessage) {
                                console.log(errorMessage);
                            },
                        });

                    }

                };

            },
            });
            document.addEventListener("DOMContentLoaded", function(){
                  $('.nav-tabs li').on('click', function(e){   
                    var target =  $(e.target);
                    if (target.hasClass('active')) {return};
                    $(target.attr('data-point') + '> div').toggleClass('active');
                    target.parent('ul').children().toggleClass('active');
                  })
            });

    </script>
@endsection
