@extends('layout.template')

@section('titolo', $comic->title);

@section('comics')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
                <div><img src="{{ $comic->thumb }}" alt=""></div>
                <p>{{ $comic->description }}</p>
                <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Ritorna al catalogo</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                <h5>Rimuovi il fumetto dal catalogo</h5>
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Rimuovi</button>
                </form>
            </div>
        </div>
    </div>

@endsection
