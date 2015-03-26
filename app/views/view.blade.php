@extends('template.main')

@section('title')
  GBet | Контент
@stop

@section('content')
  <div class="row">
   @if (isset($game))
      <div class="col-sm-9">

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{ $game->video_player }}"></iframe>
          </div>

         <div class="panel panel-default">

          <div class="panel-body">
           <h3>{{ $game->title }}</h3>
              @if (Bets::checkBet($game->id))
                <p>Cool</p>
              @else

                {{ Form::open([ 'url' => '/add_bet', 'class' => 'bet-form' ]) }}
                  {{ Form::hidden('number_game', $game->id) }}
                  {{ Form::hidden('command', 0) }}
                  {{ Form::submit($game->command_1, ['class' => 'btn btn-primary m-r-10']) }}
                {{ Form::close() }}

                {{ Form::open([ 'url' => '/add_bet', 'class' => 'bet-form' ]) }}
                  {{ Form::hidden('number_game', $game->id) }}
                  {{ Form::hidden('command', 1) }}
                  {{ Form::submit($game->command_2, ['class' => 'btn btn-success']) }}
                {{ Form::close() }}

              @endif
          </div>

           <ul class="list-group">
             <li class="list-group-item">
               <b>Дата начала: {{ $game->start_date }}</b> {{ HTML::link('/report/'.$game->id, 'Жалоба') }}
               <p>{{ $game->description }}</p>
             </li>
           </ul>
           
        </div>

      </div>
      <div class="col-sm-3">
        Text
      </div>
   @endif
  </div>
@stop