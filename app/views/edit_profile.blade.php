@extends('template.main')

@section('title')
  GBet | Профиль
@stop

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open([ 'url' => '/profile/edit']) }}
        <div class="form-group">
          <label for="inputName">Имя</label>
          {{ Form::text('first_name', $data->first_name, ['class' => 'form-control', 'id' => 'inputName', 'autocomplete' => 'off']) }}
        </div>
        <div class="form-group">
          <label for="inputSurname">Фамилия</label>
          {{ Form::text('second_name', $data->second_name, ['class' => 'form-control', 'id' => 'inputSurname', 'autocomplete' => 'off']) }}
        </div>
        {{ Form::submit('Обновить', ['class' => 'btn btn-default pull-right']) }}
      {{ Form::close() }}
      <br>
      @if (Auth::user()->root == 0)
        {{ Form::open([ 'url' => '/profile/invite']) }}
          <div class="form-group">
            <label for="inputInvite">Инвайт</label>
            {{ Form::text('invite', '', ['class' => 'form-control', 'id' => 'inputInvite', 'placeholder' => 'Ваш инвайт', 'autocomplete' => 'off']) }}
          </div>
          {{ Form::submit('Отправить', ['class' => 'btn btn-default pull-right']) }}
        {{ Form::close() }}
      @endif
      <br>
      {{ Form::open([ 'url' => '/profile/webmoney']) }}
        <div class="form-group">
          <label for="inputWMR">Кошелек WMR</label>
          {{ Form::text('wmr', $data->wmr, ['class' => 'form-control', 'id' => 'inputWMR', 'autocomplete' => 'off']) }}
        </div>
        <div class="form-group">
          <label for="inputWMR">Кошелек WMZ</label>
          {{ Form::text('wmz', $data->wmz, ['class' => 'form-control', 'id' => 'inputWMZ', 'autocomplete' => 'off']) }}
        </div>
        {{ Form::submit('Обновить', ['class' => 'btn btn-default pull-right']) }}
      {{ Form::close() }}
      <br>
    </div>
  </div>
@stop