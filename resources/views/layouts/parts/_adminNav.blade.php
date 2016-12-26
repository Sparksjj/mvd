<nav class="navbar navbar-default navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('admin.index')}}">MVD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<!--         <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
        <li class="@if(stristr( url()->current(), '/documents')) active @endif"><a href="{{ route('documents.index') }}">{{trans('admin.documents')}}</a></li>
        <li class="@if(stristr( url()->current(), '/categories')) active @endif"><a href="{{ route('categories.index') }}">{{trans('admin.categories')}}</a></li>
        <li class="@if(stristr( url()->current(), '/aboutadmin')) active @endif"><a href="{{ route('aboutadmin.show', 1) }}">"О нас"</a></li>
        <li class="@if(stristr( url()->current(), '/contactadmin')) active @endif"><a href="{{ route('contactadmin.show', 1) }}">"Контакты"</a></li>
        <li class="@if(stristr( url()->current(), '/adminuser')) active @endif"><a href="{{ route('adminuser.index') }}">Пользователи</a></li>
        <li class="@if(stristr( url()->current(), '/admindevice')) active @endif"><a href="{{ route('admindevice.index') }}">Устройства</a></li>

        <li class="@if(stristr( url()->current(), '/book')) active @endif"><a href="{{ route('book.index') }}">Книги</a></li>
       <!--  <li class="@if(stristr( url()->current(), '/projector')) active @endif"><a href=" route('projector.index') ">Проекторы</a></li> -->

      </ul>



      <ul class="nav navbar-nav navbar-right">
        <li>
            <form action="{{route('logout')}}" method="POST" class="logout">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class='news-headline'>{{trans('admin.logout')}}</strong>
            </form>
        </li>
        <li class="@if(Lang::getLocale() == 'ru') active @endif">
          <a href="{{url('/lang/ru')}}">ru</a>
        </li>
        <li class="@if(Lang::getLocale() == 'en') active @endif">
          <a href="{{url('/lang/en')}}">en</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>