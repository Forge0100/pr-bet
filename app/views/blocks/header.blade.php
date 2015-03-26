<nav role="navigation" class="navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" data-toggle="collapse" data-target="#bs-example-colapse-1" class="navbar-toggle collapsed"><span class="sr-only">Toogle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand">	GBets
        <!--img(src="img/logo-2.png", width="25", height="25" alt="")--> <small>| BETA</small></a>
    </div>
    <div id="bs-example-colapse-1" class="collapse navbar-collapse">
      <ul class="nav navbar-nav text-uppercase">
        @if(!Auth::check())
          <li>{{ HTML::link('/register', 'Регистрация') }}</li>
        @else
          <li>{{ HTML::link('/add_game', 'Добавить') }}</li>
        @endif
      </ul>
      <div class="navbar-right">
        @if ( Auth::check() )
          <p class="navbar-text navbar-right m-r-10">{{ HTML::link('/profile', Auth::user()->first_name.' '.Auth::user()->second_name) }} | {{ Balance::where('id_user', '=', Auth::id())->pluck('money') }}$ | <a href="/logout" class="navbar-link">Выйти</a></p>
        @else
          {{ Form::open([ 'url' => '/login', 'class' => 'navbar-form']) }}
            <div class="form-group">
              {{ Form::email('email', '', ['class' => 'form-control input-sm', 'id' => 'email', 'placeholder' => 'Емейл']) }}
              {{ Form::password('password', ['class' => 'form-control input-sm', 'id' => 'password', 'placeholder' => 'Пароль']) }}
              {{ Form::checkbox('remember_me', 'true', true, [ 'id' => 'remember_me', 'title' => 'Запомнить меня' ]) }}
              {{ Form::submit('Войти', ['class' => 'btn btn-primary btn-sm']) }}
              <a href="#" class="m-l-10">Забыл пароль?</a>
              <div id="authErrors" class="errors"></div>
            </div>
          {{ Form::close() }}
        @endif
      </div>
    </div>
  </div>
</nav>