@extends('template.main')

@section('title')
  GBet | Контент
@stop

@section('content')
  <div class="row">
   @if (isset($game))
     <hr/>
     <div class="table-responsive">
      <ul class="list-unstyled">
         <li><h1>{{ $game->title }}</h1></li>
         <li>
           <blockquote>
             {{ $game->description }}
           </blockquote>
         </li>
         <li>
           <p class="lead text-center">
            <button class="btn btn-primary">{{ $game->command_1 }}</button> vs
            <button class="btn btn-success">{{ $game->command_2 }}</button>
           </p>
         </li>
         <li><p class="bg-info text-right">{{ $game->start_date }} | {{ $game->bet }}</p></li>
        </ul>
     </div>
   @endif
  </div>
@stop