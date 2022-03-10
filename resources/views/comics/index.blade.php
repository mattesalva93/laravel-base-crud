@extends('layout.template')

@section('titolo', 'Catalogo Fumetti')

@section('comics')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Copertina</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Data d'uscita</th>
                            <th scope="col">Tipologia</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $elemento)
                            <tr>
                                <th scope="row">{{ $elemento->id }}</th>
                                <td>{{ $elemento->title }}</td>
                                <td>{{ $elemento->description }}</td>
                                <td> <img src="{{ $elemento->thumb }}" alt=""></td>
                                <td>{{ $elemento->price }}</td>
                                <td>{{ $elemento->series }}</td>
                                <td>{{ $elemento->sale_date }}</td>
                                <td>{{ $elemento->type }}</td>
                                <td><a href="{{ route('comics.show', $elemento->id) }}"><button type="button" class="btn btn-primary">Vedi</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
