@extends('layouts.app')

@section('content')

    <div class="container-cards d-flex">
        @foreach ($comics as $comic)
        <div class="comic-card">
            <a href="{{route('comics.show', ['comic' => $comic->slug] )}}">
                <img src="{{asset('storage/' . $comic->cover )}}" alt="">
            </a>
                <p class="p-title">{{$comic->title}}</p>
                @if($comic->availability == 1)
                <p>AVAILABLE NOW</p>
                @else
                <p>NOT AVAILABLE</p>
                @endif
        </div>
        @endforeach
    </div>


    
@endsection