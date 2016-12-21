@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все устройства</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('admindevice.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Новое устройство</button>
                    </form>
                    

                    @if(count($devices) == 0)
                        <h3 class="text-center">Нет добавленных устройств</h3>
                    @else
                        
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th>E-mail</th> 
                                    <th>Разре шенный путь</th> 
                                    <th>Дата создания</th> 
                                    <th colspan="2" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($devices as $device)  
                            <tr>
                                <td>{{ $device->id }}</td>
                                <td style="width: 70%">{{ $device['title_' . Lang::getLocale()] }}</td>
                                <td>
                                    <span>{{$device->user->email}}</span>
                                </td>
                                <td>
                                    <span style="white-space: nowrap;">{{$device->permitted_page}}</span>
                                </td>
                                <td>
                                    <span style="white-space: nowrap;">{{$device->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('admindevice.edit', $device) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('admindevice.destroy', $device) }}" method="POST" class="destroy-news">
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
                    {{ $devices->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
