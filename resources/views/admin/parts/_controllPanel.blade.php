<div class="col-sm-3 contoll_panel">
    @foreach($hrefs as $href => $name)
    	<a href="{{$href}}">{{ trans('admin' . $name) }}</a>
    @endforeach
</div> 