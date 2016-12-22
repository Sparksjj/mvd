@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все проекторы</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('projector.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Новый проектор</button>
                    </form>
                    

                    @if(count($projectors) == 0)
                        <h3 class="text-center">Нет добавленных проекторов</h3>
                    @else
                        
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th>Кол. видеофайлов</th> 
                                    <th>Дата создания</th> 
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($projectors as $projector)  
                            <tr>
                                <td>{{ $projector->id }}</td>
                                <td style="width: 70%">{{ $projector['title_' . Lang::getLocale()] }}</td>
                                <td>
                                    <span>{{count($projector->videos)}}</span>
                                </td>
                                <td>
                                    <span style="white-space: nowrap;">{{$projector->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('projector.edit', $projector) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="{{ route('projector.video.index', $projector) }}" method="GET">
                                         <button type="submit" class="btn btn-primary">Управление содержимым</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('projector.destroy', $projector) }}" method="POST" class="destroy-news">
                                        {{ csrf_field() }}

                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i> {{trans('admin.delete')}}
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @endif
                    <div class="col-md-12 text-center">
                    {{ $projectors->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
