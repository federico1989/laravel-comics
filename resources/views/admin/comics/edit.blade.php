@extends('layouts.dashboard')
    @section('content')
        <div class="container">
            <h1>Modifica il comic comic</h1>
            <form action="{{ route('admin.comics.update', ['comic'=>$comic->slug]) }}" method="post">
                @csrf
                @method('PUT')

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-group">
                    <label for="title" class="d-block">Inserisci il titolo del comic</label>
                    <input class="@error('title') is-invalid @enderror" name="title" type="text" placeholder="Inserisci il titolo" value="{{$comic->title}}">
                    <small class="form-text text-muted d-block">Titolo del comic</small>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price" class="d-block">Inserisci il prezzo del comic</label>
                    <input class="@error('price') is-invalid @enderror" name="price" type="number" min="0" step="0.01" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
                    <small class="form-text text-muted d-block">Prezzo del comic</small>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <h5>È disponibile?</h5>
                    <input type="radio" id="available" name="availability" value="1">
                    <label for="available">Sì</label><br>
                    <input type="radio" id="not_available" name="availability" value="0">
                    <label for="not_available">No</label><br>
                </div>

                <div class="form-group">
                    <label for="description" class="d-block">Descrizione del comic</label>
                    <textarea class="@error('description') is-invalid @enderror" name="description" id="" cols="60" rows="5" >{{$comic->description}}"</textarea>>
                    <small class="form-text text-muted d-block">Descrizione del comic</small>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="artist" class="d-block">Inserisci l'artista del comic</label>
                    <input class="@error('artist') is-invalid @enderror" name="artist" type="text" placeholder="Inserisci l'artista" value="{{$comic->artist}}">
                    <small class="form-text text-muted d-block">Artista del comic</small>
                    @error('artist')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="writer" class="d-block">Inserisci lo scrittore del comic</label>
                    <input class="@error('writer') is-invalid @enderror" name="writer" type="text" placeholder="Inserisci lo scrittore" value="{{$comic->writer}}">
                    <small class="form-text text-muted d-block">Scrittore del comic</small>
                    @error('writer')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="series" class="d-block">Inserisci la serie del comic</label>
                    <input class="@error('series') is-invalid @enderror" name="series" type="text" placeholder="Inserisci la serie" value="{{$comic->series}}">
                    <small class="form-text text-muted d-block">Titolo della seriec</small>
                    @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="date" class="d-block">Inserisci la data di rilascio del comic</label>
                    <input class="@error('date') is-invalid @enderror" name="date" type="date" value="{{$comic->date}}">
                    <small class="form-text text-muted d-block">Data di rilascio</small>
                    @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="volume" class="d-block">Inserisci il volume d'uscita del comic</label>
                    <input class="@error('volume') is-invalid @enderror" name="volume" type="number" min="0" placeholder="Volume d'uscita" value="{{$comic->volume}}">
                    <small class="form-text text-muted d-block">Volume d'uscita</small>
                    @error('volume')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="size" class="d-block">Inserisci la grandezza del comic</label>
                    <input class="@error('size') is-invalid @enderror" name="size" type="text" placeholder="Inserisci la grandezza" value="{{$comic->size}}">
                    <small class="form-text text-muted d-block">Grandezza del comic</small>
                    @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pages" class="d-block">Inserisci le pagine del comic</label>
                    <input class="@error('pages') is-invalid @enderror" name="pages" type="number" min="0" placeholder="Pagine del comic" value="{{$comic->pages}}">
                    <small class="form-text text-muted d-block">Pagine del comic</small>
                    @error('pages')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="rated" class="d-block">Inserisci la classificazione del comic</label>
                    <input class="@error('rated') is-invalid @enderror" name="rated" type="text" placeholder="Inserisci la classificazione" value="{{$comic->rated}}">
                    <small class="form-text text-muted d-block">Classificazione del comic</small>
                    @error('rated')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @endsection