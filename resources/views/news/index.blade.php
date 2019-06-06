@extends('layouts.master')

@section('content')
    @foreach($news as $singleNews)
        <h2><a href="/news/{{ $singleNews->id }}">{{ $singleNews->title }}</a></h2>
        <p>{{ $singleNews->content }}</p>
    @endforeach
    <nav class="blog-pagination">
        <a 
        class="btn btn-outline-{{ $news->currentPage() === 1 ? 'disabled' : 'primary'}}"
        href="{{ $news->previousPageUrl() }}">
        Previous
        </a>
        <a 
        class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'disabled'}}"
        href="{{ $news->nextPageUrl() }}">
        Next
        </a>
        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
    </nav>
@endsection