<div class="search col-md-6 text-right form-group">
	<form action="{{route('documents.index')}}" method="get">
		<input type="text" name="key" placeholder="Ключевое слово" class="form-control" @if(Request::input('key')) value="{{Request::input('key')}}" @endif>
		@if(Request::input('categoryId')) <input type="hidden" name="categoryId"  value="{{Request::input('categoryId')}}"> @endif
		<button type="submit" class="btn btn-primary">Найти</button>
	</form>
</div>