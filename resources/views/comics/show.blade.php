@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
        <a href="{{ route('comics.index') }}">
            Home Page
        </a>
        <p>comics.show</p>
        <h1>comic: {{ $comic->title }}</h1>
    </div>
</main>

@endsection