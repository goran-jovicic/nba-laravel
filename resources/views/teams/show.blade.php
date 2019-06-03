@extends('layouts.master')

@section('content')
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

    @if(count($team->comments))
        <h4>Comments:</h4>
            <ul>
                @foreach($team->comments as $comment)
                <li>
                    <p>
                        {{ $comment->user->name }}
                    </p>

                    <p>
                        {{ $comment->content }}
                    </p>
                </li>
                @endforeach
            </ul>
    @endif

    <h4> Post a comment</h4>

    <form method="POST" action="{{route('comments-post', ['team_id' => $team->id])}}">
        @csrf

        <div class="form-group">
            <label for="content">Text</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection