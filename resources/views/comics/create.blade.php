@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <p>Comic.create</p>
      <h2 class="fs-2">Crea Comic</h2>
    </div>
    <div class="container">
        <form  action="{{ route('comics.store') }}" method="POST">
            {{-- Cross Site Request Forgering --}}
            @csrf 

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Titolo comic">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Url Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="http://...">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Action,Thriller,Comedy...">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label">Prezzo</label>
                <input type="text" name="cooking_time" class="form-control" id="cooking_time" placeholder="€19.99">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
            </div>

            <button class="btn btn-primary">Crea</button>
        </form>
    </div>
  </section>
</main>

@endsection