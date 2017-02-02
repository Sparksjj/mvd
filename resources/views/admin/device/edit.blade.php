@extends('layouts.admin')

@section('content')
    <div class="container"> 

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">Изменить устройство</h4>
                </div>

                <div class="panel-body">
            
                    <h3 class="text-center">{{ $device['title_' . Lang::getLocale()] }}</h3>

                    @include('admin.parts._formErorr')

                    <form class="" action="{{ route('admindevice.update', $device) }}" method="POST" enctype="multipart/form-data" id="create-document-form">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        
                        <div class="form-group {{ $errors->has('title_ru') ? 'has-error' : '' }}">
                            <label for="title_ru">{{trans('admin.title')}} (рус.)</label>
                            <input type="text" class="form-control" id="title_ru" name="title_ru" required value="{{ $device->title_ru }}">
                        </div>

                        <div class="form-group {{ $errors->has('title_en') ? 'has-error' : '' }}">
                            <label for="title_en">{{trans('admin.title')}} (en.)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required value="{{ $device->title_en }}">
                        </div>

                        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
                            <label>Акаунт</label>
                            <select name="user_id" class="form-control">

                                @foreach( $users as $index => $user )
                                    <option value="{{$user->id}}" @if($device->user_id == $user->id) selected @endif>{{ $user->email }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('permitted_page') ? 'has-error' : '' }}">
                            <label>Разрешенная страница</label>
                            <select name="permitted_page" class="form-control">
                                @foreach($books as $book)
                                    <option value="memory_book/{{$book->id}}" @if($device->permitted_page == 'memory_book/'.$book->id) selected @endif>{{$book['title_' . Lang::getLocale()]}}</option>
                                @endforeach
                                @foreach($projectors as $projector)
                                    <option value="projectors/{{$projector->id}}" @if($device->permitted_page == 'projectors/'.$projector->id) selected @endif>{{$projector['title_' . Lang::getLocale()]}}</option>
                                @endforeach
                                @foreach($articles as $article)
                                    <option value="articles/{{$article->id}}" @if($device->permitted_page == 'articles/'.$article->id) selected @endif>{{$article['title_' . Lang::getLocale()]}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="button btn btn-success btn-block">Изменить</button>

                    </form>

                    <a href="{{route('admindevice.index')}}" class="help-href">Все устройства</a>
                </div> 
            </div>
        </div>
    </div><!-- close default .container_wrap element -->
@endsection