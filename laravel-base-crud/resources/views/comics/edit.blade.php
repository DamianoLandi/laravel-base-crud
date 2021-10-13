@extends('template')

@section("content")

<div class="container">
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @method('PATCH')
        @csrf
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $comic['title'] }}">
        </div>
        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value="{{ $comic['price'] }}">
        </div>
        <div>
            <label for="thumb">URL Immagine</label>
            <input type="text" name="thumb" id="thumb" value="{{ $comic['thumb'] }}">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value="{{ $comic['series'] }}">
        </div>
        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" value="{{ $comic['type'] }}">
        </div>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="desctiption" cols="30" rows="10">{{ $comic['description'] }}</textarea>
        </div>
        <button type="submit">Crea</button>
    </form>
</div>

@endsection