@extends('layouts.main')

@section('content')

    @include('site.parts._slider')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">             
                    {!!$about['content_' . Lang::getLocale()]!!}
                <div class="spacer-50"></div>
            </div>
        </div>
    </div>
@endsection