@extends('layouts.admin')

@section('content')

    <div class="container">  

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-center">Все книги</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('book.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Новая книга</button>
                    </form>
                    

                    @if(count($books) == 0)
                        <h3 class="text-center">Нет добавленных книг</h3>
                    @else
                        
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th>Кол. страниц</th> 
                                    <th>Дата создания</th> 
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($books as $book)  
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td style="width: 70%">{{ $book['title_' . Lang::getLocale()] }}</td>
                                <td>
                                    <span>{{count($book->pages)}}</span>
                                </td>
                                <td>
                                    <span style="white-space: nowrap;">{{$book->created_at}}</span>
                                </td>
                                <td>
                                    <form class="" action="{{ route('book.edit', $book) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="{{ route('book.page.index', $book) }}" method="GET">
                                         <button type="submit" class="btn btn-primary">Управление содержимым</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('book.destroy', $book) }}" method="POST" class="destroy-news">
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
                    {{ $books->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
