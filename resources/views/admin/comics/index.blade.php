@extends('layouts.dashboard')

@section('content')

<div class="container">

    <h1>All posts for admin</h1>
        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Prezzo</th>
                <th>Disponibilità</th>
                <th>Descrizione</th>
                <th>Artista</th>
                <th>Scrittore</th>
                <th>Serie</th>
                <th>Data</th>
                <th>Volume</th>
                <th>Grandezza</th>
                <th>Pagine</th>
                <th>Rated</th>
                <th>Slug</th>
                <th>Cover</th>
                <th>Creato il</th>
                <th>Editato il</th>
                <th>AZIONI</th>
                </tr>
            </thead>
            <tbody>
    
                @foreach ($comics as $comic)
                <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->price}}</td>
                <td>{{$post->availability}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->artist}}</td>
                <td>{{$post->writer}}</td>
                <td>{{$post->series}}</td>
                <td>{{$post->date}}</td>
                <td>{{$post->volume}}</td>
                <td>{{$post->size}}</td>
                <td>{{$post->pages}}</td>
                <td>{{$post->rated}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->cover}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="#" class="btn btn-primary" style="margin-bottom: 10px">Leggi</a>
                    <a href="#" class="btn btn-warning" style="margin-bottom: 10px">Modifica</a>
                    <a href="#" class="btn btn-danger">Elimina</a>
                </td>
                </tr>
            @endforeach
    
            </tbody>
        </table>
</div>
    
@endsection

