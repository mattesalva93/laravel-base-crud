@extends('layout.template')

@section('titolo', 'Aggiungi Fumetto');

@section('comics')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Aggiungi un nuovo fumetto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="@error('title') is-invalid @enderror form-control" id="name" name="title"
                            value="{{ old('title') }}" placeholder="Inserisci il titolo del fumetto">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Tipologia</label>
                        <select class="form-control form-control-md" id="type" name="type">
                            <option value="comic book" {{old("type") == "comic book" ? "selected" : null}}>Comic Book</option>
                            <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" : null}}>Graphic Novel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="series">Serie</label>
                        <input type="text" class=" @error('series') is-invalid @enderror form-control" id="series"
                            value="{{ old('series') }}" name="series" placeholder="Inserisci la serie a cui appartiene">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" class="@error('price') is-invalid @enderror form-control" id="price" name="price"
                            value="{{ old('price') }}" placeholder="Inserisci il prezzo nel formato 10.99">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Data d'uscita</label>
                        <input type="text" class="@error('sale_date') is-invalid @enderror form-control" id="sale_date"
                            name="sale_date" value="{{ old('sale_date') }}"
                            placeholder="Inserisci la data di pubblicazione del fumetto">

                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="@error('description') is-invalid @enderror form-control" id="description" name="description"
                            placeholder="Inserisci la descrizione del fumetto">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumb">Immagine</label>
                        <input type="text" class="@error('thumb') is-invalid @enderror form-control" id="thumb" name="thumb"
                            value="{{ old('thumb') }}" placeholder="Inserisci l'url della copertina del fumetto">
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
