@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('admin.parts._tree_category')

        <div class="col-md-12 content-wrapper" id="main-content">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">{{trans('admin.all_cat')}}</h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('categories.create') }}" method="GET">
                        <button type="submit" class="btn btn-success btn-block">{{trans('admin.add_cat')}}</button>
                    </form>
                    

                    @if(count($categories) == 0)
                        <h3 class="text-center">{{trans('admin.now_cat')}} <a href="{{route('categories.create')}}">{{trans('admin.create_cat')}} </a></h3>
                    @else
                        <h3 class="text-center">{{trans('admin.categoryes')}}</h3>
                    @endif

                    @foreach($categories as $category)                    
                        <a href="{{ route('categories.show', $category) }}" class="col-sm-4">
                            <h4 class="text-center">{{ $category['name_' . Lang::getLocale()] }}</h4>
                        </a>
                    @endforeach

                    <div class="col-md-12 text-center">

                        {{ $categories->links() }}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
