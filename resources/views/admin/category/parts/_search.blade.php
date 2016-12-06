<div class="search col-md-6 text-right form-group">
	<form action="{{route('categories.index')}}" method="get">
		<input type="text" name="key" placeholder="Ключевое слово" class="form-control" @if(Request::input('key')) value="{{Request::input('key')}}" @endif>
		<button type="submit" class="btn btn-primary">Найти</button>
	</form>
</div>