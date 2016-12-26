@extends('layouts.admin')

@section('content')

    <div class="container">  

        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Последние добавленные категории</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('categories.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Создать новую</button>
                    </form>
                    

                    @if(count($latest_categories) == 0)
                        <h3 class="text-center">Нет добавленных категорий. <a href="{{route('categories.create')}}">создать новую</a></h3>
                    @else
                        <h3 class="text-center">Последние добавленные категории</h3>
                    

                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>id</th> 
                                <th>Название</th> 
                                <th>Дата создания</th> 
                                <th colspan="3" class="text-center">Управление</th> 
                            </tr> 
                        </thead>
                    @foreach($latest_categories as $category)  
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td style="width: 70%">{{ $category['title_' . Lang::getLocale()] }}</td>
                            <td>
                                <span style="white-space: nowrap;">{{$category->created_at}}</span>
                            </td>
                            <td>
                                <form class="" action="{{ route('categories.edit', $category) }}" method="get">
                                     <button type="submit" class="btn btn-warning">Изменить</button>
                                </form>
                            </td>
                            <td>
                                <form class="" action="{{ route('categories.show', $category) }}" method="get">
                                     <button type="submit" class="btn btn-primary">Просмотр</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="destroy-news">
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
                </div>

            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Последние добавленные документы</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('documents.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">Добавить новый</button>
                    </form>
                    

                    @if(count($latest_documents) == 0)
                        <h3 class="text-center">Нет добавленных документов. <a href="{{route('documents.create')}}">создать новый</a></h3>
                    @else
                        <h3 class="text-center">Документы</h3>
                    
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>id</th> 
                                <th>Название</th> 
                                <th>Инвентарный номер</th> 
                                <th>Дата создания</th> 
                                <th colspan="3" class="text-center">Управление</th> 
                            </tr> 
                        </thead>
                    @foreach($latest_documents as $document)  
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td style="width: 70%">{{ $document['title_' . Lang::getLocale()] }}</td>
                            <td style="width: 70%">{{ $document->inventory_number }}</td>
                            <td>
                                <span style="white-space: nowrap;">{{$document->created_at}}</span>
                            </td>
                            <td>
                                <form class="" action="{{ route('documents.edit', $document) }}" method="GET">
                                     <button type="submit" class="btn btn-warning">Изменить</button>
                                </form>
                            </td>
                            <td>
                                <form class="" action="{{route('documents.show', $document)}}" method="GET">
                                     <button type="submit" class="btn btn-primary">Просмотр</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('documents.destroy', $document) }}" method="POST" class="destroy-news">
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
                </div>

            </div>

        </div>
    </div>
@endsection
