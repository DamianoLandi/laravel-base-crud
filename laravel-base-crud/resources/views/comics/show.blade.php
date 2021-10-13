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
        <h3>ADVERTISEMENT</h3>
        <div class="sidebar-img-container">
            <img src="{{ asset('img/adv.jpg') }}" alt="Ad">
        </div>
    </div>
</div>

<div id="extra-info">
    <div class="container">
        <div class="col">
            <h2>Talent</h2>
            <p class="row">
                <span>
                    Art by:
                </span>
                <span class="list">
                    @foreach($comic['artists'] as $artist)
                    <span class="blue-text">{{$artist}},</span>
                    @endforeach
                </span>
            </p>
            <p class="row">
                <span>
                    Written by:
                </span>
                <span class="list">
                    @foreach($comic['writers'] as $writer)
                    <span class="blue-text">{{$writer}},</span>
                    @endforeach
                </span>
            </p>
        </div>
        <div class="col">
            <h2>Specs</h2>
            <p class="row">
                <span>
                    Series:
                </span>
                <span class="blue-text">
                    {{$comic['series']}}
                </span>
            </p>
            <p class="row">
                <span>
                    US Price:
                </span>
                <span >
                    {{$comic['price']}}
                </span>
            </p>
            <p class="row">
                <span>
                    On Sale Date:
                </span>
                <span >
                    {{$comic['sale_date']}}
                </span>
            </p>
        </div>
    </div>
</div>

@endsection