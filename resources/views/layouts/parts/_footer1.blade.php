<footer class="site-footer">
	<div class="container">
    	<div class="row">

        	<div class="col-md-6 col-sm-6 text-center">
            	<div class="widget footer-widget widget_links text-center">
            		<h4 class="widget-title">{{trans("layout.navigation")}}</h4>
                    <ul>
                        <li><a href="{{route('main.index')}}">{{trans("layout.home")}}</a></li><br />
                        <li><a href="{{route('about.index')}}">{{trans("layout.about")}}</a></li><br />
                        <li><a href="{{route('contacts.index')}}">{{trans("layout.contact")}}</a></li>
                    </ul>
                </div>
            </div>

        	<div class="col-md-6 col-sm-6 text-center">
            	<div class="widget footer-widget">
            		<h4 class="widget-title">{{trans("layout.ventues")}} </h4>
                    <address>
                    	<a href="{{route('about.index')}}"><strong>{{trans("layout.free")}}</strong></a><br>
                        <span>{{trans("layout.adress1")}}<br>
						{{trans("layout.adress2")}}</span>
                   	</address>
                </div>
            </div>

        </div>
    </div>
</footer>