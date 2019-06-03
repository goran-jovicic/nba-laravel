
<h2> {{ $team->name }}</h2>
<p> {{ $team->email }}</p>
<p> {{ $team->address }}</p>
<p> {{ $team->city }}</p>
<ul>
    @if(count($team->players))
    @foreach ($team->players as $player)
        <li><a href="/players/{{ $player->id }}"> {{ $player->first_name }} {{ $player->last_name }}</a></li>
    @endforeach
    @endif
</ul>