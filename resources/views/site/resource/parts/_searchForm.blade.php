<div class="col-sm-6 text-right">
    <form action="{{route('search.index')}}" method="get" class="form-inline">
        <div class="form-group">                            
            <input type="text" class="form-control" placeholder="{{trans('layout.search')}}" name="keywords" style="margin-bottom: 0" required>
            <button type="submit" class="btn btn-primary">{{trans('layout.submit')}}</button>
        </div>
        
    </form>
</div> 