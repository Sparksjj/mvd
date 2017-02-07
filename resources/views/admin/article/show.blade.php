@extends('layouts.admin')

@section('content')
<style>
    .container img {
        max-width: 100%;
        height: auto;
    }
</style>
    <div class="container">   

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Статья "{{$article['title_' . Lang::getLocale()]}}"</h4>
                </div>

                <div class="panel-body">
                    
                    
                    <a href="{{route('adminarticle.index')}}" class="help-href">Все статьи</a>

                    <div class="col-xs-12 contoll_buttons">                    

                        <div class="col-xs-6">
                            <a href="{{route('adminarticle.edit', $article)}}">{{trans('admin.update')}}</a>
                        </div>
                        <div class="col-xs-6">
                            <form action="{{ route('adminarticle.destroy', $article) }}" method="POST" class="destroy-news">
                                {{ csrf_field() }}

                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <button type="submit" class="button button-red">
                                    <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                </button>

                            </form>
                        </div>

                    </div>

					<div class="clearfix"></div>

                    <div>
                        @if(count($images) == 0)
                            <h3 class="text-center">Нет картинок слайдера. </h3>

                            <form class="" action="{{ route('uploadSImage', $article) }}" method="POST" id="create-news-form" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group{{ $errors->has('sl_images') ? ' has-error' : '' }}">
                                    <label class="control-label">Загрузить картинки слайдера (опционно)</label>
                                    <input id="input-8" name="sl_images[]" type="file" class="file-loading" data-allowed-file-extensions='["png", "jpg", "png", "gif", "bmp", "svg"]' value="{{ old('sl_images') }}" multiple>
                                </div>
                                <button type="submit" class="btn btn-primary col-md-12">Загрузить</button>
                            </form>
                        @else

                        <form class="" action="{{ route('uploadSImage', $article) }}" method="POST" id="create-news-form" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group{{ $errors->has('sl_images') ? ' has-error' : '' }}">
                                <label class="control-label">Добавить картинки слайдера</label>
                                <input id="input-8" name="sl_images[]" type="file" class="file-loading" data-allowed-file-extensions='["png", "jpg", "png", "gif", "bmp", "svg"]' value="{{ old('sl_images') }}" multiple>
                            </div>
                                <button type="submit" class="btn btn-primary col-md-12">Загрузить</button>
                        </form>
                        <br>
                        <br>
                            <h3 class="text-center">Картинки слайдера: </h3>

                        @foreach($images as $image)  
                            <div class="col-xs-7 text-center" style="height: 50px"><img src="{{$image->src}}" alt="" style="max-height: 50px"></div>
                            <div class="col-xs-5 text-center" style="height: 50px">
                                
                                <form action="{{ route('article.image.delete', $image->id) }}" method="POST" class="destroy-news" style="margin-top: 10px">
                                    {{ csrf_field() }}

                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                    </button>

                                </form>
                            </div>
                        @endforeach
                        @endif

                    </div>

                    <div>
                        {!! $article['content_' . Lang::getLocale()] !!}
                    </div>    
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(){

            $("#input-8").fileinput({
                showUpload: false,
                mainClass: "input-group",
                initialPreviewAsData: true,
            });
        });
    </script>
@endsection
