<div class="ms container">
	<div class="ms row">
		@foreach($games as $game)
			<div class="ms item">
				<div class="ms well">
					<div class="thumbnail">
						{{ html_entity_decode( HTML::link('/view/'.$game->id, HTML::image('uploads/' . $game->image, $game->title))  )}}
					</div>
					<div class="caption">
						<h3>{{ HTML::link('/view/'.$game->id, $game->title) }}</h3>
						<p>{{ str_limit($game->description, 35) }}</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>	
 </div>