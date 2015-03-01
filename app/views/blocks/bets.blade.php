<h2 class="sub-header">Ставки</h2>
@if (isset($games))
  <hr/>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Игра</th>
          <th>Название</th>
          <th>Команды</th>
          <th>Дата начала</th>
          <th>Ставка</th>
        </tr>
      </thead>
      <tbody>
        @foreach($games as $game)
          <tr>
            <td><a href="/category/{{ $game->game }}">{{ $game->game }}</a></td>
            <td>{{ $game->title }}</td>
            <td>{{ $game->command_1 }} vs {{ $game->command_2 }}</td>
            <td>{{ $game->start_date }}</td>
            <td>{{ $game->bet }}</td>
            <td><a href="/view/{{ $game->id }}">Поставить</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endif