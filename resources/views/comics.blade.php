@extends('layout.app')

@section('title')
<div class="container">
    <div class="row">
        <h1 class="title">COMICS</h1>
    </div>
</div>
@endsection

@section('comics-card')
<div class="container">
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card">
                <img src="{{ $comic['thumb']}}" alt="comic image" class="card-img-top">
                <h6 class="card-title mt-2">{{ $comic['title']}}</h6>
                <p>{{ $comic['series']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection