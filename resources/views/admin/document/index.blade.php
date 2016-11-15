@extends('layouts.admin')

@section('content')

    <div class="container">  

        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">{{trans('admin.all_doc')}} 
                    @if($category) 
                        {{trans('admin.in_cat')}} 
                        <form action=" {{route('documents.index')}} " method="GET" id="select_category">
                            <select name="categoryId" id="categoryId">
                                <option value="null">все категории</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" @if($cat->id == $category->id) selected @endif>{{ $cat['name_'.Lang::getLocale()] }}</option>
                                @endforeach

                            </select>
                        </form>
                    @else 
                        {{trans('admin.add_into_doc')}}
                        <form action=" {{route('documents.index')}} " method="GET" id="select_category">
                            <select name="categoryId" id="categoryId">
                                <option value="null" selected>{{trans('admin.all_doc')}}</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{ $cat['name_'.Lang::getLocale()] }}</option>
                                @endforeach

                            </select>
                        </form>
                    @endif</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('documents.create') }}" method="GET">
                        <input type="hidden" value="@if($category){{$category->id}}@else{{'null'}}@endif" name="categoryId">
                        <button type="submit" class="btn btn-success btn-block">{{trans('admin.all_doc')}}</button>
                    </form>
                    

                    @if(count($documents) == 0)
                        <h3 class="text-center">{{trans('admin.now_doc')}}<a href="{{route('documents.create')}}">{{trans('admin.create_doc')}}</a></h3>
                    @else
                        <h3 class="text-center">{{trans('admin.documents')}}</h3>
                    @endif

                    @foreach($documents as $document)                    
                        <a href="{{ route('documents.show', $document) }}" class="col-sm-4">
                            <h4 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h4>
                        
                            <iframe src="{{ $document->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%"></iframe>
                        </a>
                    @endforeach

                    <div class="col-md-12 text-center">
                    {{ $documents->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
