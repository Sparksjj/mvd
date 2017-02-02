@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все стастьи</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('adminarticle.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Добавить статью</button>
                    </form>
                    
                    <br/>
                    
                    @if(count($articles) == 0)
                        <h3 class="text-center">Нет добавленных статей</h3>
                    @else

                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th>Дата создания</th> 
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($articles as $index=>$article)  
                            <tr @if($index%2==0) style="background-color: #eee" @endif>
                                <td>{{ $article->id }}</td>

                                <td style="width: 70%">{{ $article['title_' . Lang::getLocale()] }}</td>

                                <td>
                                    <span style="white-space: nowrap;">{{$article->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('adminarticle.edit', $article) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="{{ route('adminarticle.show', $article) }}" method="GET">
                                         <button type="submit" class="btn btn-primary">просмотр</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('adminarticle.destroy', $article) }}" method="POST" class="destroy-news">
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
                    {{ $articles->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
