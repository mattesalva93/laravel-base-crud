@extends('layout.template')

@section('titolo', $comic->title);

@section('comics')
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Modifica un fumetto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route("comics.update", $comic->id)}}" method="POST">
        
                @csrf
                @method('PUT')
        
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="@error('title') is-invalid @enderror form-control" id="name" name="title"
                    value="{{old("title")??$comic->title}}" placeholder="Inserisci il titolo del fumetto">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Tipologia</label>
                    <select class="form-control form-control-md" id="type" name="type">
                        @php
                        $selected = old("type") ?? $comic->type;
                        @endphp
                        <option value="comic book" {{$selected == "comic book" ? "selected" : ""}}>Comic Book</option>
                        <option value="graphic novel" {{$selected == "graphic novel" ? "selected" : ""}}>Graphic Novel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="series">Serie</label>
                    <input type="text" class=" @error('series') is-invalid @enderror form-control" id="series"
                        value="{{old("series")??$comic->series}}" name="series" placeholder="Inserisci la serie a cui appartiene">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="@error('price') is-invalid @enderror form-control" id="price" name="price"
                        value="{{old("price")??$comic->price}}" placeholder="Inserisci il prezzo nel formato 10.99">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_date">Data d'uscita</label>
                    <input type="text" class="@error('sale_date') is-invalid @enderror form-control" id="sale_date"
                        name="sale_date" value="{{old("sale_date")??$comic->sale_date}}"
                        placeholder="Inserisci la data di pubblicazione del fumetto">

                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="@error('description') is-invalid @enderror form-control" id="description" name="description"
                        placeholder="Inserisci la descrizione del fumetto">{{old("description")??$comic->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thumb">Immagine</label>
                    <input type="text" class="@error('thumb') is-invalid @enderror form-control" id="thumb" name="thumb"
                        value="{{old("thumb")??$comic->thumb}}" placeholder="Inserisci l'url della copertina del fumetto">
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