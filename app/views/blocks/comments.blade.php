<div class="panel panel-default">
  <div class="panel-heading">Коментарии</div>
  <div class="panel-body">
    @foreach($comments as $comment)
		<p class="lead">{{ $comment->message }}</p>
		<h6 class="text-right">{{ $comment->updated_at }}</h6>
	@endforeach


	{{ Form::open([ 'url' => '/view/comment', 'class' => 'bet-form' ]) }}
  	  	<div class="input-group">
  	      {{ Form::hidden('game_id', $game->id) }}
  	      {{ Form::text('message', '', ['class' => 'form-control']) }}
  	      <span class="input-group-btn">
  	        {{ Form::submit('_', ['class' => 'btn btn-success m-r-10']) }}
  	      </span>
  	    </div>
  	{{ Form::close() }}


  </div>
</div>