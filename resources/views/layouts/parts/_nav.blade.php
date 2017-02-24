<div class="site-header-wrapper">
    <header class="site-header">
        <div class="container sp-cont">
            <a href="{{route('main.index')}}" class="some_text" >
                <h1>МУЗЕЙ МИНИСТЕРСТВА ВНУТРЕННИХ ДЕЛ</h1>
                <span>РЕСПУБЛИКИ БЕЛАРУСЬ</span>
            </a>
            <div class="clearfix"></div>
            <!-- 
            <div class="pull-left" id="search-wrapper">
                <form action="{{route('search.index')}}" method="get" id="search-form">
                    <input type="text" placeholder="{{trans('layout.search')}}" name="keywords" required>
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <i class="fa fa-search" aria-hidden="true" id="search-button"></i>
            </div> -->
            <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <!-- Main Navigation -->
            <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                <ul class="sf-menu">
                    <li class="@if(url()->current() == route('main.index')) active @endif"><a href="{{route('main.index')}}">{{trans('layout.home')}}</a></li>
                    <li class="@if(url()->current() == route('about.index')) active @endif"><a href="{{route('about.index')}}">{{trans('layout.about')}}</a></li>
                    <li class="@if(url()->current() == route('contacts.index')) active @endif"><a href="{{route('contacts.index')}}">{{trans('layout.contact')}}</a></li>
                    <li class="@if(stristr( url()->current(), 'resource')) active @endif"><a href="{{route('resource.index')}}">{{trans('layout.resources')}}</a></li>
                    <li class="@if(stristr( url()->current(), '3d')) active @endif"><a href="{{route('3d.index')}}">{{trans('layout.threeD')}}</a></li>
<!--                     @if(Auth::user())
    <li>
        <form action="{{route('logout')}}" method="POST" class="logout">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class='news-headlin navigation-button'>{{trans('admin.logout')}}</strong>
        </form>
    </li>
@else
<li><a href="{{url('/login')}}">{{trans('layout.enter')}}</a></li>
@endif -->
                    <li>
                        <span class="@if(Lang::getLocale()=='en') current @endif"><a href="{{url('/lang/en')}}">en</a></span>
                        <span class="@if(Lang::getLocale()=='ru') current @endif"><a href="{{url('/lang/ru')}}">ru</a></span>                        
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Site Header -->
</div>
<style>
    .header-style1 .site-header{
        height: 80px;
    }
    .main-navigation > ul > li .current a{
        color: #dabc74;
    }
    .main-navigation > ul > li span a{
        color: #fff;
        font-size: 20px;
        font-family: 'Beans', 'Roboto', sans-serif;
        font-weight: bold;
    }
    .main-navigation > ul > li span {
        display: inline-block;
    }
    .main-navigation > ul > li span:first-child{
        border-right: 1px solid #fff;
        padding-right: 7px;
    }
    .main-navigation > ul > li span:last-child{
        padding-left: 4px;

    }
    @media only screen and (max-width: 992px){
        .main-navigation > ul > li span a{
            color: #333;
        }
        .main-navigation > ul > li span {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    .main-navigation > ul > li span:last-child{
        padding-right: 30px;

    }

    }
</style>