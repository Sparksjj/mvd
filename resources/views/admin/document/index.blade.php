@extends('layouts.admin')

@section('content')

<script src='/uploader3/js/fileinput.min.js'></script>
<link src='/uploader3/css/fileinput.min.css' rel="stylesheet">

    <div class="container">    
        @if(count($documents) == 0)
            <h3 class="text-center">Нет добавленныз документов. <a href="{{route('documents.create')}}">создать новый</a></h3>
        @else
            <h3 class="text-center">Документы</h3>
        @endif

        @foreach($documents as $document)
            {{ $document['title_' . Lang::getLocale()] }}
        @endforeach
    </div>
@endsection
