@extends('template.main')

@section('title')
  GBet | Добавить Игру
@stop

@section('content')
  <div class="row">
    <div class="col-md-5 col-md-offset-3">
      {{ Form::open([ 'url' => '/add_game', 'files' => 'true' ]) }}
        <div class="form-group">
          <label for="title">Название</label>
          {{ Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) }}
        </div>
        <div class="form-group">
          <label for="description">Описание</label>
          {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'size' => '10x5']) }}
        </div>
        <div class="form-group">
          <label for="image">Ссылка на изображение</label>
          {{ Form::file('image', ['class' => 'form-control', 'id' => 'image']) }}
        </div>
        <div class="form-group">
          <label for="game">Какая игра?</label>
          {{ Form::select('game', array(
            0 => 'CS 1.6',
            1 => 'CS Source',
            2 => 'CS:GO'
          ), '', ['class' => 'form-control', 'id' => 'game']) }}
        </div>
        <div class="form-group">
          <label for="video_player">Код видеоплеера</label>
          {{ Form::textarea('video_player', null, ['class' => 'form-control', 'id' => 'video_player', 'size' => '10x5']) }}
        </div>
        <div class="form-group">
          <label for="command_1">Название комманды 1</label>
          {{ Form::text('command_1', '', ['class' => 'form-control', 'id' => 'command_1']) }}
        </div>
        <div class="form-group">
          <label for="command_2">Название комманды 2</label>
          {{ Form::text('command_2', '', ['class' => 'form-control', 'id' => 'command_2']) }}
        </div>
        <div class="form-group">
          <label for="start_date">Дата начала</label>
          {{ Form::text('start_date', '', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          <label for="bet">Ставка</label>
          {{ Form::text('bet', '', ['class' => 'form-control', 'id' => 'bet', 'placeholder' => '5.30']) }}
        </div>
        <div class="form-group">
          <label for="visible">Видимость</label>
          {{ Form::select('visible', array(
            0 => 'Выкл',
            1 => 'Вкл.'
          ), '', ['class' => 'form-control', 'id' => 'visible']) }}
        </div>
        {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
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