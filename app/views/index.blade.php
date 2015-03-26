@extends('template.main')

@section('title')
  GBet | Главная
@stop

@section('content')
  <div class="row text-center">
    @include('blocks.masonry')
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Внимание!</strong> Сайт на данный момент в стадии разработки, потому порой что-то может идти не так.
    </div>
  </div>
@stop