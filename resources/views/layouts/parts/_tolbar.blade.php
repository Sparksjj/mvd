<div class="topbar">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6  col-sm-6 col-xs-8">
            	<p>{{trans('layout.opening_hours')}}</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-4">
            	<ul class="pull-right social-icons-colored">
                	<li class="@if(Lang::getLocale()=='en') current @endif"><a href="{{url('/lang/en')}}">en</a></li>
                    <li class="@if(Lang::getLocale()=='ru') current @endif"><a href="{{url('/lang/ru')}}">ru</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>