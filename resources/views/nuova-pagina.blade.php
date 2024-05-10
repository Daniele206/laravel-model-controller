@extends('layout.main')

@section('content')

<div class="container my-5">
    <h1>Movies</h1>

    <ul class="list-group">
        @foreach ($movies as $movie)
        <li class="list-group-item">
            {{$movie->id}}
            -
            {{$movie->title}}
            -
            {{$movie->original_title}}
            -
            {{$movie->nationality}}
            -
            {{$movie->date}}
            -
            {{$movie->vote}}
        </li>
        @endforeach
    </ul>
</div>

@endsection
