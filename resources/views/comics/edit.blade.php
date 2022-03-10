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
                    <input type="text" class="form-control" id="name" name="title" placeholder="Inserisci il titolo del fumetto" value="{{$comic->title}}">
                </div>
                <div class="form-group">
                    <label for="type">Tipologia</label>
                    <select class="form-control form-control-md" id="type" name="type">
                        <option value="comic book" {{$comic->type == "comic book"? "selected" : ""}}>Comic Book</option>
                        <option value="graphic novel" {{$comic->type == "graphic novel"? "selected" : ""}}>Graphic Novel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="series">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene" value="{{$comic->series}}">
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo nel formato 10.99" value="{{$comic->price}}">
                </div>
                <div class="form-group">
                    <label for="sale_date">Data d'uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione del fumetto" value="{{$comic->sale_date}}">
                </div>
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{ $comic->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumb">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url della copertina del fumetto" value="{{$comic->thumb}}">
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </div>
</div>
@endsection