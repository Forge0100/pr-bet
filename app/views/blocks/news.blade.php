<div class="panel panel-success">
  <div class="panel-heading">Новости</div>
  <div class="panel-body text-left">
    @if (isset($news))
      <ul>
        @foreach ($news as $n)
          <li>
            <p>{{ $n->message }}</p>
            <small>{{ date("d-m-Y H:i", strtotime($n->created_at)) }}</small>
          </li>
        @endforeach
      </ul>
    @endif
    @if( Auth::check() )
      @if(Auth::user()->root == 1)
        {{ Form::open(['url' => '/add_news', 'id' => 'form_message']) }}
          <div class="form-group">
            {{ Form::textarea('message', null, ['class' => 'form-control', 'size' => '10x2']) }}
            {{ Form::submit('Добавить', ['class' => 'btn btn-primary btn-xs pull-right', 'id' => 'add_message']) }}
          </div>
        {{ Form::close() }}
      @endif
    @endif
  </div>
</div>