@extends('layouts.admin')

@section('content')

    <div class="container">   

        @include('admin.parts._controllPanel')

        <div class="col-sm-9 border_left"> 
            @if(count($documents) == 0)
                <h3 class="text-center">Нет добавленныз документов. <a href="{{route('documents.create')}}">создать новый</a></h3>
            @else
                <h3 class="text-center">Документы</h3>
            @endif

            @foreach($documents as $document)
                <a href="{{ route('documents.show', $document) }}" class="col-xs-4">
                    <h4 class="text-center">{{ $document['title_' . Lang::getLocale()] }}</h4>
                
                    <iframe src="{{ $document->path }}" name="{{ $document['title_' . Lang::getLocale()] }}" style="width: 100%"></iframe>
                </a>
            @endforeach
        </div>
    </div>
@endsection
