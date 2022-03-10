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
            <form action="{{route("comics.store")}}" method="POST">
        
                @csrf
        
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="name" name="title" placeholder="Inserisci il titolo del fumetto">
                </div>
                <div class="form-group">
                    <label for="type">Tipologia</label>
                    <select class="form-control form-control-md" id="type" name="type">
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="series">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene">
                </div>
                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo nel formato 10.99">
                </div>
                <div class="form-group">
                    <label for="sale_date">Data d'uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione del fumetto">
                </div>
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto"></textarea>
                </div>
                <div class="form-group">
                    <label for="thumb">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url della copertina del fumetto">
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </div>
</div>
@endsection