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

                         @each('admin.category.parts._category_children', $categories, 'category')

                    @endif


                    <div class="col-md-12 text-center">

                        {{ $categories->links() }}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
