@extends('template')

@section("content")

<section id="comics-list">
    <div class="container">
        @foreach($comics as $comic)
            <div class="card">
                <div class="poster">
                    <a href='{{url("/comics/$loop->index")}}'>
                        <img src="{{$comic['thumb']}}" alt="Poster">
                    </a>
                </div>
                <span>{{$comic['title']}}</span>
            </div>
        
        @endforeach
    </div>
</section>

@endsection