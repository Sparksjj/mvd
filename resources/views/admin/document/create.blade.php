@extends('layouts.admin')

@section('content')

<script>
    document.addEventListener("DOMContentLoaded", function(){
        $("#e2").select2();

        $.fn.datetimepicker.dates['ru'] = {
            days: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
            daysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
            daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
            months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
            monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Ин", "Ил", "Авг", "Сен", "Окт", "Ноя", "Дек"],
            today: "Сегодня"
        };

        $('#datetimepicker4').datetimepicker({
          pickTime: false,
          language: '{{Lang::getLocale()}}'
        });

        $('#datetimepicker5').datetimepicker({
          pickTime: false,
          language: '{{Lang::getLocale()}}'
        });

    })
</script>

    <div class="container"> 

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="col-md-6">{{trans('admin.create_doc')}}</h4>
                @include('admin.document.parts._search')
            </div>

            <div class="panel-body">
        
                    <h3 class="text-center">{{trans('admin.add_doc')}}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group with-radio">
                            <label><input type="radio" name="is_public" value="" checked>Приватный документ</label>
                            <label><input type="radio" name="is_public" value="true">Общий доступ</label>
                        </div>
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ old('title_ru') }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (англ.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}">
                        </div>

                        <div class="form-group {{ $errors->has('inventory_number') ? 'has-error' : '' }}">
                            <label for="inventory_number">Идентификационный номер</label>
                            <input type="text" class="form-control" id="inventory_number" name="inventory_number" required value="{{ old('inventory_number') }}">
                        </div>

                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label for="category">Категория</label>
                            <select name="category" class="form-control">

                                @foreach( $categories as $index => $category )
                                    <option value="{{$category->id}}" @if($category->id == $from_category['id']) selected @endif>{{ $category['title_' . Lang::getLocale() ]}}</option>
                                @endforeach

                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="e2">Связанные документы</label>
                            <select name="join_item[]" class="form-control" id="e2" multiple>
                                @foreach ($documents as $item)
                                    <option value="{{ $item->id }}">{{ $item->title_ru }}</option>
                                @endforeach
                            </select>
                        </div>   


                        
                        <div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
                            <label for="author">Автор</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                        </div>  

                        <div class="form-group {{ $errors->has('get_number') ? 'has-error' : '' }}">
                            <label for="get_number">Номер акта приема</label>
                            <input type="text" class="form-control" id="get_number" name="get_number" value="{{ old('get_number') }}">
                        </div>

                        <div class="form-group {{ $errors->has('get_data') ? 'has-error' : '' }}" >
                          <div id="datetimepicker4" class="input-append">
                            <label for="get_data">Дата акта приема</label> <br />
                            <input data-format="yyyy-MM-dd" type="text" name="get_data"></input>
                            <span class="add-on">
                              <i class="glyphicon glyphicon-calendar" aria-hidden="true" id="get_data"></i>
                            </span>
                          </div>
                        </div>

                        
                        <div class="form-group {{ $errors->has('fzk_number') ? 'has-error' : '' }}">
                            <label for="fzk_number">Номер акта ФЗК</label>
                            <input type="text"  maxlength="3" minlength="3" class="form-control" id="fzk_number" name="fzk_number" value="{{ old('fzk_number') }}">
                        </div>

                        <div class="form-group {{ $errors->has('fzk_data') ? 'has-error' : '' }}">
                          <div id="datetimepicker5" class="input-append">
                            <label for="fzk_data">Дата акта ФЗК</label><br />
                            <input data-format="yyyy-MM-dd" type="text" name="fzk_data" id="fzk_data"></input>
                            <span class="add-on">
                              <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                                      

                        <div class="form-group {{ ($errors->has('height')||$errors->has('width')||$errors->has('length')) ? 'has-error' : '' }}">
                            <label>Размер (мм.)</label>
                            <div class="col-md-12">
                                <label for="height">Высота (мм.)</label>
                                <input type="number" min="0" class="form-control" id="height" name="height" value="{{ old('height') }}">
                            </div>
                            <div class="col-md-12">
                                <label for="width">Ширина (мм.)</label>
                                <input type="number" min="0" class="form-control" id="width" name="width" value="{{ old('width') }}">
                            </div>
                            <div class="col-md-12"  style="margin-bottom: 10px;">
                                <label for="length">Длина (мм.)</label>
                                <input type="number" min="0" class="form-control" id="length" name="length" value="{{ old('length') }}">
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                            <label for="weight">Вес (гр.)</label>
                            <input type="number" min="0" class="form-control" id="weight" name="weight" value="{{ old('weight') }}">
                        </div>
                        <div class="form-group {{ $errors->has('parts_count') ? 'has-error' : '' }}">
                            <label for="parts_count">Кол-во частей</label>
                            <input type="number" min="0" class="form-control" id="parts_count" name="parts_count"  value="{{ old('parts_count') }}">
                        </div>

                        <div class="form-group {{ $errors->has('safety') ? 'has-error' : '' }}">
                            <label for="safety">Состояние</label>
                            <input type="text" class="form-control" id="safety" name="safety"  value="{{ old('safety') }}">
                        </div>


                        <div class="form-group {{ $errors->has('storage') ? 'has-error' : '' }}">
                            <label for="storage">Место хранения</label>
                            <input type="text" class="form-control" id="storage" name="storage"  value="{{ old('storage') }}">
                        </div>
                        <div class="form-group {{ $errors->has('material') ? 'has-error' : '' }}">
                            <label for="material">Материал и техника</label>
                            <input type="text" class="form-control" id="material" name="material"  value="{{ old('material') }}">
                        </div>

                        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}" id="type-wrapper">
                            <label for="type">Тип документа</label>
                            <select name="type" id="type">

                                    <option value="pdf" selected >pdf</option>
                                    <option value="image">image</option>
                                    <option value="3d">3d</option>
                                    <option value="video">video</option>

                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('description_ru') ? 'has-error' : '' }}">
                            <label for="description_ru">Описание (рус.)</label>
                            <textarea class="form-control" id="description_ru" name="description_ru" >{{ old('description_ru') }}</textarea>
                        </div>

                        <div class="form-group {{ $errors->has('description_en') ? 'has-error' : '' }}">
                            <label for="description_en">Описание (англ.)</label>
                            <textarea class="form-control" id="description_en" name="description_en" >{{ old('description_en') }}</textarea>
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
            initInput()
            var contentHeight = $(window).height() - $('#page-wrapper .footer').outerHeight(true) - $('#page-wrapper .navigation').outerHeight(true);
            $('#content-wrapper').css('min-height', contentHeight);
            $('#type').on('change', function(e){                
                initInput()
            })
        },1500);

        function initInput(){
            $("#input-wrapper").remove();
            var imput = $('<div class="form-group" id="input-wrapper"><label class="control-label">Загрузить документ</label><input id="input-7" name="document[]" type="file" class="file-loading" multiple></div>');
            var attr;
            switch($('#type').val()){
                case 'pdf':
                    attr = '["pdf"]';
                break;
                case 'image':
                    attr = '["jpg", "png", "gif", "jpeg", "svg"]';
                break;
                case '3d':
                    attr = '["jpg", "png", "gif", "jpeg", "svg"]';
                break;
                case 'video':
                    attr = '["ogv", "mp4", "webm"]';
                break;
            }  
            imput.insertAfter('#type-wrapper');
            $('#input-7').attr('data-allowed-file-extensions', attr);
            
            $("#input-7").fileinput({
                showUpload: false,
                mainClass: "input-group",
                initialPreviewAsData: true,
            });
        }
    </script>
@endsection
