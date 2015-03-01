@extends('template.main')

@section('title')
  GBet | Контент
@stop

@section('content')
  <div class="row">
    <div class="col-md-4">
    <ul class="list-unstyled">
      <li>Имя: {{ Auth::user()->first_name }}</li>
      <li>Фамилия: {{ Auth::user()->second_name }}</li>
      <li>Email: {{ Auth::user()->email }}</li>
      <li>Статус: 
        @if (Auth::user()->root == 0)
          <span class="label label-default">Простой</span>
        @else
          <span class="label label-success">VIP</span>
        @endif
      </li>
      <small>{{ HTML::link('/profile/edit', 'Редактировать профиль') }}</small>
    </ul>
    </div>
  </div>
@stop