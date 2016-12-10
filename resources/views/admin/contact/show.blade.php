@extends('layouts.admin')

@section('content')

    <div class="container">   

        <div class="col-md-12 content-wrapper" id="main-content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Страница "Контакты"</h4>
                </div>

                <div class="panel-body">
                    
                    <a href="{{route('contactadmin.edit', $contact)}}" class="help-href">{{trans('admin.update')}}</a>

                    <div class="container">
                        {!! $contact['content_' . Lang::getLocale()] !!}
                    </div>    
                </div>

            </div>
        </div>
    </div>
@endsection
