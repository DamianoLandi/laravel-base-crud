@extends('template')

@section("content")

<section id="comics-list">
    <div class="container">
        @foreach($comics as $comic)
            <div class="card">
                <div class="poster">
                    <a href='{{route("comics.show", $comic->id)}}'>
                        <img src="{{$comic['thumb']}}" alt="Poster">
                    </a>
                </div>
                <span>{{$comic['title']}}</span>
            </div>
        
        @endforeach
    </div>
</section>

@endsection