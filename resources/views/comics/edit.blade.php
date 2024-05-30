@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
        <p>Comic.edit</p>
        <a href="{{ route('comics.index') }}">
            Home Page
        </a>
        <h2 class="fs-2">Modifica Comic</h2>
    </div>
    <div class="container">
        <form  action="{{ route('comics.update', $comic) }}" method="POST">

            {{-- Cross Site Request Forgering --}}
            @csrf 
            @method ('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Titolo comic">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url image</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="€19.99">
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Action,Thriller,Comedy...">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sales date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="YYYY-MM-DD">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Action,Thriller,Comedy...">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artista</label>
                <input type="text" name="artists" class="form-control" id="artists" placeholder="...">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">writers</label>
                <input type="text" name="writers" class="form-control" id="writers" placeholder="...">
            </div>
            <button class="btn btn-primary">Modifica</button>
        </form>
    </div>
  </section>
</main>

@endsection