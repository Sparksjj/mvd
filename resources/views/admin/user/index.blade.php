@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">Все пользователи</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('categories.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">{{trans('admin.add_cat')}}</button>
                    </form>
                    

                        
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>Имя</th> 
                                    <th>E-mail</th>  
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($users as $user)  
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{ $user->email }}
                                </td>

                                <td>
                                    <form class="" action="{{ route('adminuser.update', $user) }}" method="POST">

                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                        <div>

                                        <label><input type="radio" name='group_id' value="2" @if($user->groups[0]->id == 2) checked @endif>сотрудник музея</label>
                                        <label><input type="radio" name='group_id' value="1" @if($user->groups[0]->id == 1) checked @endif>простой пользователь</label>
                                        <label><input type="radio" name='group_id' value="3" @if($user->groups[0]->id == 3) checked @endif>устройство музея</label>

                                        </div>
                                         <button type="submit" class="btn btn-warning col-md-12">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminuser.destroy', $user) }}" method="POST" class="destroy-news">
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


                    <div class="col-md-12 text-center">

                        {{ $users->links() }}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
