
<ul>
    @if($category['have_child'])
         <li id="{{$category['name'].'_'.$category['id']}}" data-category="@if($category['id'] == 'all_categories'){{'all_categories'}}@else{{'category'}}@endif" data-jstree='{ "opened" : true, "icon":"/images/folder3.png" }'> <a href="">{{$category['name']}}</a>
        @foreach ($category['children'] as $key => $value)
            @include('admin.parts._tree_category_children', ['category' => $value])
        @endforeach
        </li>
    @elseif($category['have_child'] === null)
        <li id="{{$category->id}}" data-category="document" data-jstree='{"icon":"/images/file3.png"}'>{{$category->title_ru}}</li>
    @else
        <li id="{{$category['name'].'_'.$category['id']}}" data-category="category" data-jstree='{ "opened" : false, "icon":"/images/folder2.png" }'> <a href="">{{$category['name']}}</a></li>
    @endif

</ul>
