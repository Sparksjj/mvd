@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все видео в проекторе {{$projector['title_' . Lang::getLocale()]}}</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('projector.video.create', $projector) }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Добавить видео файл</button>
                    </form>
                    

                    @if(count($videos) == 0)
                        <h3 class="text-center">Нет добавленных видео файлов</h3>
                    @else

                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>Позиция</th> 
                                    <th>Название</th> 
                                    <th>Дата создания</th> 
                                    <th colspan="2" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($videos as $index=>$video)  
                            <tr @if($index%2==0) style="background-color: #eee" @endif>
                                <td>{{ $video->position }}</td>

                                <td style="width: 70%">{{ $video['title_' . Lang::getLocale()] }}</td>

                                <td>
                                    <span style="white-space: nowrap;">{{$video->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('projector.video.edit', [$projector, $video]) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('projector.video.destroy', [$projector, $video]) }}" method="POST" class="destroy-news">
                                        {{ csrf_field() }}

                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                        </button>

                                    </form>
                                </td>
                            </tr>
                            <tr  @if($index%2==0) style="background-color: #eee" @endif>
                                <td colspan="5">
                                    <div class="col-md-12 text-center">
                                          <video controls="controls" src="{{ $video->path }}">
                                           <source src="{{ $video->path }}" type='video/ogg; codecs="theora, vorbis"'>
                                          </video>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @endif
                    <div class="col-md-12 text-center">
                    {{ $videos->links() }}
                    </div>
                    <a href="{{route('projector.index')}}" class="help-href">Все проекторы</a>
                </div>

            </div>
        </div>
    </div>
@endsection
