@if (count($category) > 0)
    <ul>
    <li @if ($category->parent_id == null) class="my_lists_bold" @else class="my_lists" @endif><a href="{{route('categories.show', $category)}}">{{ $category['title_'.Lang::getLocale()] }}</a>
        <form action="{{route('categories.edit', $category)}}" method="get">
            <button type="submit" class="change_item btn btn-default btn-lg"><span class="glyphicon glyphicon-ok-circle"></span> изменить</button>
        </form>


            <form action="{{route('categories.destroy', $category)}}" method="post">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="del_item btn btn-default btn-lg"><span class="glyphicon glyphicon-remove-circle"></span> удалить</button>
            </form>

    </li>
        @if(!Request::input('key'))
            @foreach ($category->children as $key => $value)
                @if (count($value) > 0)
                    @include('admin.category.parts._category_children', ['category' => $value])
                @endif
            @endforeach
        @endif
    </ul>
@endif
