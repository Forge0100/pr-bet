@extends('template.main')

@section('title')
  GBet | Главная
@stop

@section('content')
  <div class="row text-center">
    @include('blocks.masonry')
  </div>
@stop