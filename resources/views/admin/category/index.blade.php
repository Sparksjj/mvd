@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">{{trans('admin.all_cat')}}</h4>
                    @include('admin.category.parts._search')
                </div>

                <div class="panel-body">
                    <form action="{{ route('categories.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">{{trans('admin.add_cat')}}</button>
                    </form>
                    

                    @if(count($categories) == 0)
                        <h3 class="text-center">{{trans('admin.now_cat')}} @if(Request::input('key')) с ключевым словом "{{Request::input('key')}}" @endif <a href="{{route('categories.create')}}">{{trans('admin.create_cat')}} </a></h3>
                    @else
                        <h3 class="text-center">{{trans('admin.categories')}} @if(Request::input('key')) с ключевым словом "{{Request::input('key')}}" @endif</h3>
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($categories as $category)  
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td style="width: 70%">{{ $category['title_' . Lang::getLocale()] }}</td>
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


                    <div class="col-md-12 text-center">

                        {{ $categories->links() }}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
