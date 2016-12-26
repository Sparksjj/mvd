@extends('layouts.admin')

@section('content')
    <div class="container"> 
        @include('admin.parts._tree_category')
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">{{trans('admin.update_doc')}}</h4>
                    @include('admin.document.parts._search')
                </div>

                <div class="panel-body">
            
                    <h3 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('documents.update', $document) }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                        <div class="form-group with-radio">
                            <label><input type="radio" name="is_public" value="" @if(!$document->is_public) checked @endif>Приватный документ</label>
                            <label><input type="radio" name="is_public" value="true" @if($document->is_public) checked @endif>Общий доступ</label>
                        </div>
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $document->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ $document->title_en }}">
                        </div>
                        
                        <div class="form-group {{ $errors->has('inventory_number') ? 'has-error' : '' }}">
                            <label for="inventory_number">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="inventory_number" name="inventory_number" required value="{{ $document->inventory_number }}">
                        </div>

                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}" id="category-wrapper">
                            <label for="category">{{trans('admin.category')}}</label>
                            <select name="category">

                                @foreach( $categories as $index => $category )
                                    <option value="{{$category->id}}" @if($category->id == $catId) selected @endif>{{ $category['title_' . Lang::getLocale() ]}}</option>
                                @endforeach

                            </select>
                        </div>

<!--                         <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}" id="type-wrapper">
    <label for="type">{{trans('admin.type')}}</label>
    <select name="type" id="type">

            <option value="pdf" @if($document->type == 'pdf') selected @endif>pdf</option>
            <option value="3d" @if($document->type == '3d') selected @endif>3d</option>
            <option value="video" @if($document->type == 'video') selected @endif>video</option>

    </select>
</div> -->

                        <button type="submit" class="button btn btn-success btn-block">{{trans('admin.update_doc')}}</button>

                    </form>

                    <div class="form-group" id="old-doc-wrapper">
                        <label class="col-xs-12">{{trans('admin.type')}}</label>
                    @if($document->type == '3d')

                        <div id="image_holder_x" class="imageholder">
                            <img id="product_image_x" src="{{$sources[0]->path}}"  />
                        </div>

                        @foreach($sources as $index => $source)
                                                            <!-- Small modal -->
                            <div class="text-center" style="padding-bottom: 20px;">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm{{$index}}">{{trans('admin.delete')}}</button>

                                <div class="modal fade bs-example-modal-sm{{$index}} source-delete text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                    
                                      <div class="modal-footer text-center">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                                        <form action="{{route('sources.destroy', $source->id)}}" method="POST" class="destroy-news">
                                        {{ csrf_field() }}
                                          
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-times" aria-hidden="true"></i> remove
                                            </button>

                                            
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <img src="{{ $source->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="max-width: 100%; display: block; margin: 0 auto"></iframe>                            
                            </div>

                        @endforeach
                    @else

                        @foreach($sources as $index => $source)
                                                            <!-- Small modal -->
                            <div class="text-center" style="padding-bottom: 20px;">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm{{$index}}">{{trans('admin.delete')}}</button>

                                <div class="modal fade bs-example-modal-sm{{$index}} source-delete text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                  <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                    
                                      <div class="modal-footer text-center">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                                        <form action="{{route('sources.destroy', $source->id)}}" method="POST" class="destroy-news">
                                        {{ csrf_field() }}
                                          
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-times" aria-hidden="true"></i> remove
                                            </button>

                                            
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <iframe src="{{ $source->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%; height: 700px;"></iframe>                            
                            </div>

                        @endforeach

                    @endif
                    </div>

                    <a href="{{route('documents.index')}}" class="help-href">{{trans('admin.all_doc')}}</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->

    <script>

        setTimeout(function() {
            $(function(){
                initInput()
                var contentHeight = $(window).height() - $('#page-wrapper .footer').outerHeight(true) - $('#page-wrapper .navigation').outerHeight(true);
                $('#content-wrapper').css('min-height', contentHeight);
                $('#type').on('change', function(e){                
                    initInput()
                })
            })
        },1500);

        function initInput(){
            $("#input-wrapper").remove();
            var imput = $('<div class="form-group" id="input-wrapper"><label class="control-label">{{trans("admin.change_doc")}}</label><input id="input-7" name="document[]" type="file" class="file-loading" multiple></div>');
            var attr;

            switch('{{$document->type}}'){
                case 'pdf':
                    attr = '["pdf"]';
                break;
                case '3d':
                    attr = '["jpg", "png", "gif", "jpeg"]';
                break;
                case 'video':
                    attr = '["ogv", "mp4", "webm"]';
                break;
            }  
            imput.insertAfter('#category-wrapper');
            $('#input-7').attr('data-allowed-file-extensions', attr);
            
            $("#input-7").fileinput({
                showUpload: false,
                mainClass: "input-group",
                initialPreviewAsData: true,
            });
        }

    </script>
    @if($document->type == '3d')
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                setTimeout(function(){
                var presentation = new javascriptViewer($('#product_image_x'),{
                    total_frames:72,
                    target_id:'image_holder_x',
                    images_src:[
                    @foreach($sources as $index => $source)
                        '{{$source->path}}',
                    @endforeach
                    ],
                    });
     
                presentation.start();
                }, 500)

            });
        </script>
    @endif
@endsection
