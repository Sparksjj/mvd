@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все страницы в книге {{$book['title_' . Lang::getLocale()]}}</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('book.page.create', $book) }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Добавить страницу</button>
                    </form>
                    

                    @if(count($pages) == 0)
                        <h3 class="text-center">Нет добавленных страниц</h3>
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
                        @foreach($pages as $index=>$page)  
                            <tr @if($index%2==0) style="background-color: #eee" @endif>
                                <td>{{ $page->position }}</td>

                                <td style="width: 70%">{{ $page['title_' . Lang::getLocale()] }}</td>

                                <td>
                                    <span style="white-space: nowrap;">{{$page->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('book.page.edit', [$book, $page]) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('book.page.destroy', [$book, $page]) }}" method="POST" class="destroy-news">
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
                                    <div class="col-md-12">
                                        {!! $page['content_' . Lang::getLocale()] !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @endif
                    <div class="col-md-12 text-center">
                    {{ $pages->links() }}
                    </div>
                    <a href="{{route('book.index')}}" class="help-href">Все книги</a>
                </div>

            </div>
        </div>
    </div>
@endsection
