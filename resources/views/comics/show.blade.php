@extends('layout.template')

@section('titolo', $comic->title);

@section('comics')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
                <div><img src="{{ $comic->thumb }}" alt=""></div>
                <p>{{ $comic->description }}</p>
                <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">back</button></a>
            </div>
        </div>
    </div>

@endsection
