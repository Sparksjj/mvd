<div class="topbar">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6  col-sm-6 col-xs-12">
            	<p>{{trans('layout.opening_hours')}}</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-right">
            @if(Auth::user())
            <div class="text-right col-xs-7">{{trans('layout.greeting') . ' ' . Auth::user()->name}}</div>
            @endif
                <div @if(Auth::user()) class="col-sm-4"  @endif>
                    <ul class="pull-right social-icons-colored">
                        <li class="@if(Lang::getLocale()=='en') current @endif"><a href="{{url('/lang/en')}}">en</a></li>
                        <li class="@if(Lang::getLocale()=='ru') current @endif"><a href="{{url('/lang/ru')}}">ru</a></li>
                    </ul>                
                </div>

            </div>
        </div>
    </div>
</div>