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
        <div class="col-4">
            <div class="card">
                <img src="{{ $comic['thumb']}}" alt="">
                <h5>{{ $comic['series']}}</h5>
                <h6>{{ $comic['title']}}</h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection