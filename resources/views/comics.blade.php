@extends('layout.app')

@section('title')
<h1>COMICS PAGE</h1>
@endsection
@section('content')
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae exercitationem explicabo debitis quia iste quis eius, sed ipsum. Mollitia quam ullam voluptatibus officia corporis odit molestiae non molestias asperiores vitae.</p>
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