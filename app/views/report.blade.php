@extends('template.main')

@section('title')
  GBet |  Жалоба
@stop

@section('content')
  <div class="row">
    <div class="col-md-5 col-md-offset-3">
      {{ Form::open([ 'url' => '/view/report']) }}
        {{ Form::hidden('game_id', $id) }}
        <div class="form-group">
          <label for="inputSurname">Причина жалобы</label>
          {{ Form::select('report_id', 
          [
            '1' => 'Не соответствие ставки',
            '2' => 'Подтасовка ставки'
          ]
          , '', ['class' => 'form-control', 'id' => 'game']) }}
        </div>
        <div class="form-group">
          <label for="description">Сообщение</label>
          {{ Form::textarea('message', null, ['class' => 'form-control', 'id' => 'message', 'size' => '10x5']) }}
        </div>
        {{ Form::submit('Отправить', ['class' => 'btn btn-default pull-right']) }}
      {{ Form::close() }}
    </div>
    <div class="col-md-2">
      <div class="errors" name="reports">
        @foreach ( $errors->reports->getMessages() as $error )
          @foreach ( $error as $message )
            {{ $message }} <br />
          @endforeach
        @endforeach
      </div>
    </div>
  </div>
@stop