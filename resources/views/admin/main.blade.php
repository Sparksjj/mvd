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
                        <h3 class="text-center">Нет добавленныч категорий. <a href="{{route('categories.create')}}">создать новую</a></h3>
                    @else
                        <h3 class="text-center">Последние добавленные категории</h3>
                    @endif

                    @foreach($latest_categories as $category)                    
                        <a href="{{ route('categories.show', $category) }}" class="col-sm-4">
                            <h4 class="text-center">{{ $category['title_' . Lang::getLocale()] }}</h4>
                        </a>
                    @endforeach

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
                        <h3 class="text-center">Нет добавленныз документов. <a href="{{route('documents.create')}}">создать новый</a></h3>
                    @else
                        <h3 class="text-center">Документы</h3>
                    @endif

                    @foreach($latest_documents as $document)                    
                        <a href="{{ route('documents.show', $document) }}" class="col-sm-4">
                            <h4 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h4>
                        
                        </a>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection
