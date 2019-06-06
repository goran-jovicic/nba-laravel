@extends('layouts.master')

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
    <p>Created by : {{ $news->user->name }}</p>
@endsection

{{-- {{$player->team->name}} --}}