@extends('template')

@section("content")

<div id="comic-main" class="container">
    <div class="info">
        <h2>{{$comic['title']}}</h2>
        <div class="shopping">
            <p class="price">
                <span>US Price: {{$comic['price']}}</span>
                <span>Available</span>
            </p>
            <p class="av-check">
                Check Availability
            </p>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="sidebar">
        <div class="sidebar-img-container">
            <img src="{{$comic['thumb'] }}" alt="Poster">
        </div>
    </div>

@endsection