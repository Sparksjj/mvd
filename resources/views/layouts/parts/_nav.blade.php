<div class="site-header-wrapper">
    <header class="site-header">
        <div class="container sp-cont">
<!--                 <div class="site-logo">
    <h1><a href="index.html"><img src="images/logo.png" alt="Logo"></a></h1>
</div> -->
            <div class="pull-left" id="search-wrapper">
                <form action="{{route('search.index')}}" method="get" id="search-form">
                    <input type="text" placeholder="{{trans('layout.search')}}" name="keywords" required>
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <i class="fa fa-search" aria-hidden="true" id="search-button"></i>
            </div>
            <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <!-- Main Navigation -->
            <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                <ul class="sf-menu">
                    <li class="@if(url()->current() == route('main.index')) active @endif"><a href="{{route('main.index')}}">{{trans('layout.home')}}</a></li>
                    <li class="@if(url()->current() == route('about.index')) active @endif"><a href="{{route('about.index')}}">{{trans('layout.about')}}</a></li>
                    <li class="@if(url()->current() == route('contacts.index')) active @endif"><a href="{{route('contacts.index')}}">{{trans('layout.contact')}}</a></li>
                    <li class="@if(stristr( url()->current(), 'resource')) active @endif"><a href="{{route('resource.index')}}">{{trans('layout.resources')}}</a></li>
                    @if(Auth::user())
                        <li>
                            <form action="{{route('logout')}}" method="POST" class="logout">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class='news-headlin navigation-button'>{{trans('admin.logout')}}</strong>
                            </form>
                        </li>
                    @else
                    <li><a href="{{url('/login')}}">{{trans('layout.enter')}}</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Site Header -->
</div>