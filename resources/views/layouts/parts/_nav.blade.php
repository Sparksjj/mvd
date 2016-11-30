<div class="site-header-wrapper">
    <header class="site-header">
        <div class="container sp-cont">
            <div class="pull-left" id="search-wrapper">
                <form action="#" id="search-form">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <i class="fa fa-search" aria-hidden="true" id="search-button"></i>
            </div>
            <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <!-- Main Navigation -->
            <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                <ul class="sf-menu">
                    <li class="@if(url()->current() == route('main.index')) active @endif"><a href="{{route('main.index')}}">Home</a></li>
                    <li class="@if(url()->current() == route('about.index')) active @endif"><a href="{{route('about.index')}}">About</a></li>
                    <li class="@if(url()->current() == route('contacts.index')) active @endif"><a href="{{route('contacts.index')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Site Header -->
</div>