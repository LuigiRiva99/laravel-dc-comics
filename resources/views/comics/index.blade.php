@extends('layouts.app')

@section('content')
<main>
    <section>
      <div class="container">
        <div class="row pt-3">
          <div class="col-auto">
            <h1>comics page index</h1>
          </div>
          <div class="col-auto ms-auto">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo comic</a>
          </div>
        </div>
      </div>
      <div class="container">
        <table class="table-dark">
            <thead>
              <tr>
                <th>ID</th>
                <th>Immagine</th>
                <th>Titolo</th>
                <th>Description</th>
                <th>Price</th>
                <th>Series</th>
                <th>Release</th>
                <th>Type</th>
                <th>Artist</th>
                <th>Writer</th>
              </tr>
            </thead>
            <tbody  class="table-group-divider table-hover table-striped">
              @foreach ($comics as $comic)
                  <tr class="p-3">
                      <td>{{ $comic->id }}</td>
                      <td>
                        <img src="{{ $comic->thumb }}" height="200" width="150" alt="">
                      </td>
                      <td>
                        <a href="{{ route('comics.show', $comic ) }}">
                            {{ $comic->title }}
                        </a>
                      </td>
                      <td>{{ $comic->description}}</td>
                      <td>{{ $comic->price}}</td>
                      <td>{{ $comic->series}}</td>
                      <td>{{ $comic->sale_date}}</td>
                      <td>{{ $comic->type}}</td>
                      <td>{{ $comic->artists}}</td>
                      <td>{{ $comic->writers}}</td>
                      <td>
                        <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection