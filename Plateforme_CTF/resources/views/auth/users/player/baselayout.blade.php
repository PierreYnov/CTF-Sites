<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  {!! Html::style('css/bootstrap.min.css') !!}
  {!! Html::style('css/plugins.min.css') !!}
  {!! Html::style('adminlte/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('adminlte/dist/css/skins/skin-black.min.css') !!}
  {!! Html::style('css/app.min.css') !!}

</head>
<body class="hold-transition skin-black sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="/dashboard" class="logo">
        <span class="logo-mini"><b>{!! config('appmeta.htmltitle') !!}</b></span>
        <span class="logo-lg"><b>{!! config('appmeta.htmltitle') !!}</b></span>
      </a>

      <nav class="navbar navbar-static-top" id="navbar-black" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Basculer la navigation</span>
        </a>

        @yield('event_menu')

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if(is_null($profile->profpic) OR empty($profile->profpic))
                  <img class="user-image" alt="User Image" src="/images/defaults/avatar.jpg">
                @else
                  <img class="user-image" alt="User Image" src="/user/uploads/{{ Auth::user()->username.'/'.$profile->profpic}}">
                @endif
                <span class="hidden-xs">{{Auth::user()->username}}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  @if(is_null($profile->profpic) OR empty($profile->profpic))
                    <img class="img-circle" alt="User Image" src="/images/defaults/avatar.jpg">
                  @else
                    <img class="img-circle" alt="User Image" id="img-thumb" src="/user/uploads/{{ Auth::user()->username.'/'.$profile->profpic}}">
                  @endif

                  <p>
                    {{$profile->first_name}} {{$profile->last_name}}
                    <br>
                    {{Auth::user()->username}}
                    <small>A rejoint le {{ date('F d, Y', strtotime(Auth::user()->created_at)) }}</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    {!! HTML::link('/user/profile/edit', 'Editez le Profil',['class'=>'btn btn-success']) !!}
                  </div>
                  <div class="pull-right">
                    {!!Html::linkRoute('logout', 'Se déconnecter',null,['class'=>'btn btn-danger']) !!}
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel" style="min-height:70px;">
          <div class="info" style="left:0px">
            <br><p>{{$profile->first_name}} {{$profile->last_name}} @if(!is_null($profile->display_name)) <br> {{$profile->display_name}}@endif</p><br>
            </div>
          </div>

          <ul class="sidebar-menu">
            <li class="header">Salut</li>
            <li><a href="/dashboard"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i><span>Profil</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/user/profile/edit">Editer Information</a></li>
                <li><a href="/user/settings/password">Sécurité</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <div id="app">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <a href="/about">A propos</a>
        </div>
      </footer>
    </div>

    {!! Html::script('js/plugins.min.js') !!}
    {!! Html::script('adminlte/dist/js/app.min.js') !!}
    {!! Html::script('js/app.min.js') !!}
    {!! Html::script('js/utils.min.js') !!}

    @yield('scripts')
  </body>
</html>
