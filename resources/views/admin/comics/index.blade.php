@extends('layouts.dashboard')

@section('content')

<div class="container"> 
    <h1>All comics for admin</h1>
    <a href="{{route('admin.comics.create')}}" class="btn btn-success">Create a new comic</a>
</div>
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
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->availability}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->artist}}</td>
                <td>{{$comic->writer}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->date}}</td>
                <td>{{$comic->volume}}</td>
                <td>{{$comic->size}}</td>
                <td>{{$comic->pages}}</td>
                <td>{{$comic->rated}}</td>
                <td>{{$comic->slug}}</td>
                <td>{{$comic->cover}}</td>
                <td>{{$comic->created_at}}</td>
                <td>{{$comic->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.comics.show', ['comic'=>$comic->slug]) }}" class="btn btn-primary" style="margin-bottom: 10px">Leggi</a>
                    <a href="{{ route('admin.comics.edit', ['comic'=>$comic->slug]) }}" class="btn btn-warning" style="margin-bottom: 10px">Modifica</a>
                    <form action="{{ route('admin.comics.destroy', ['comic'=>$comic->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="button" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
                </tr>
            @endforeach
    
            </tbody>
        </table>
    
@endsection

