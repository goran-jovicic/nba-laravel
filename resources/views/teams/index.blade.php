@extends('layouts.master')

@section('content')
@foreach ($teams as $team)
    <h2><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2>
@endforeach
@endsection