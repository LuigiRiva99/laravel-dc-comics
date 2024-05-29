@extends('layouts.app')

@section('content')
<main>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <p>comics page index</p>
          </div>
          <div class="col-auto ms-auto">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo comic</a>
          </div>
        </div>
      </div>
      <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Immagine</th>
                <th>Titolo</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>
                    <img src="{{ $comic->thumb }}" height="144" width="144" alt="">
                    </td>
                    <td>
                    <a href="{{ route('comics.show', $comic ) }}">
                        {{ $comic->title }}
                    </a>
                    </td>
                    <td>{{ $comic->type}}</td>
                    <td>{{ $comic->price}}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection