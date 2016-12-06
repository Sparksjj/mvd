@extends('layouts.admin')

@section('content')

    <div class="container">   
        @include('admin.parts._tree_category')
        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">{{trans('admin.show_doc')}}</h4>
                </div>

                <div class="panel-body">

                    
                    <a href="{{route('documents.index')}}" class="help-href">{{trans('admin.all_doc')}}</a>

                    <div class="col-xs-12 contoll_buttons">                    

                        <div class="col-xs-6">
                            <a href="{{route('documents.edit', $document)}}">{{trans('admin.update')}}</a>
                        </div>
                        <div class="col-xs-6">
                            <form action="{{ route('documents.destroy', $document) }}" method="POST" class="destroy-news">
                                {{ csrf_field() }}

                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="button button-red">
                                    <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                </button>

                            </form>
                        </div>

                    </div>
                    <h3 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h3>

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

            </div>
        </div>
    </div>
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
