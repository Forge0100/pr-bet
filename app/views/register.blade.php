@extends('template.main')

@section('title')
  GBet | Главная
@stop

@section('content')
  <div class="row">
    <div class="col-md-5 col-md-offset-3">
      {{ Form::open([ 'url' => '/register' ]) }}
        <div class="form-group">
          <label for="email">Емейл</label>
          {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email']) }}
        </div>
        <div class="form-group">
          <label for="password">Пароль</label>
          {{ Form::password('password_first', ['class' => 'form-control', 'id' => 'password']) }}
        </div>
        <div class="form-group">
          <label for="re-password">Повторите ваш Пароль</label>
          {{ Form::password('password_second', ['class' => 'form-control', 'id' => 're-password']) }}
        </div>
        <hr>
        <div class="form-group">
          <label for="first-name">Имя</label>
          {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name']) }}
        </div>
        <div class="form-group">
          <label for="second-name">Фамилия</label>
          {{ Form::text('second_name', '', ['class' => 'form-control', 'id' => 'second_name']) }}
        </div>
        <small>* все поля обязательны для заполнения!</small>
        {{ Form::submit('Зарегистрироваться', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
    <div class="col-md-4">
      <div class="errors" name="register">
        @foreach ( $errors->register->getMessages() as $error )
          @foreach ( $error as $message )
            {{ $message }} <br />
          @endforeach
        @endforeach
      </div>
    </div>
  </div>
@stop