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
           <div class="btn-group" role="group" aria-label="...">
             <button type="button" class="btn btn-primary">{{ $game->command_1 }}</button>
             <button type="button" class="btn btn-success">{{ $game->command_2 }}</button>
           </div>
          </div>

           <ul class="list-group">
             <li class="list-group-item">
               <b>Дата начала: {{ $game->start_date }}</b>
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