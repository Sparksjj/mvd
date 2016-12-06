@extends('layouts.admin')

@section('content')

    <div class="container">  

        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="text-left col-md-6">{{trans('admin.all_doc')}} 
                    @if($category) 
                        {{trans('admin.in_cat')}} 
                        <form action=" {{route('documents.index')}} " method="GET" id="select_category">
                            @if(Request::input('key')) <input type="hidden" name="key"  value="{{Request::input('key')}}"> @endif
                            <select name="categoryId" id="categoryId">
                                <option value="null">все категории</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" @if($cat->id == $category->id) selected @endif>{{ $cat['title_'.Lang::getLocale()] }}</option>
                                @endforeach

                            </select>
                        </form>
                    @else 
                        {{trans('admin.add_into_doc')}}
                        <form action=" {{route('documents.index')}} " method="GET" id="select_category">
                            @if(Request::input('key')) <input type="hidden" name="key"  value="{{Request::input('key')}}"> @endif
                            <select name="categoryId" id="categoryId">
                                <option value="null" selected>{{trans('admin.all_doc')}}</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{ $cat['title_'.Lang::getLocale()] }}</option>
                                @endforeach

                            </select>
                        </form>
                    @endif</h4>
                    @include('admin.document.parts._search')
                </div>

                <div class="panel-body">
                    <form action="{{ route('documents.create') }}" method="GET">
                        @if(Request::input('key')) <input type="hidden" name="key"  value="{{Request::input('key')}}"> @endif
                        <input type="hidden" value="@if($category){{$category->id}}@else{{'null'}}@endif" name="categoryId">
                        <button type="submit" class="btn btn-success btn-block">{{trans('admin.create_doc')}}</button>
                    </form>
                    

                    @if(count($documents) == 0)
                        <h3 class="text-center">{{trans('admin.now_doc')}} @if(Request::input('key')) с ключевым словом "{{Request::input('key')}}" @endif<!-- <a href="{{route('documents.create')}}">{{trans('admin.create_doc')}}</a> --></h3>
                    @else
                        <h3 class="text-center">{{trans('admin.documents')}} @if(Request::input('key')) с ключевым словом "{{Request::input('key')}}" @endif</h3>
                        
                        <table class="table table-bordered">
                            <thead> 
                                <tr> 
                                    <th>id</th> 
                                    <th>Название</th> 
                                    <th colspan="3" class="text-center">Управление</th> 
                                </tr> 
                            </thead>
                        @foreach($documents as $document)  
                            <tr>
                                <td>{{ $document->id }}</td>
                                <td style="width: 70%">{{ $document['title_' . Lang::getLocale()] }}</td>
                                <td>
                                    <form class="" action="{{ route('documents.edit', $document) }}" method="GET">
                                         <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                </td>
                                <td>
                                    <form class="" action="{{route('documents.edit', $document)}}" method="GET">
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
                    <div class="col-md-12 text-center">
                    {{ $documents->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
