@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container text-center">
        <a href="{{ route('comics.index') }}">
            Home Page
        </a>
        <p>{{ $comic->id }}</p>
        <p>
          <img src="{{ $comic->thumb }}" height="600" width="500" alt="">
        </p>
        <p>{{ $comic->title }}</p>
        <p>{{ $comic->description}}</p>
        <p>{{ $comic->price}}</p>
        <p>{{ $comic->series}}</p>
        <p>{{ $comic->sale_date}}</p>
        <p>{{ $comic->type}}</p>
        <p>{{ $comic->artists}}</p>
        <p>{{ $comic->writers}}</p>
    </div>
</main>

@endsection