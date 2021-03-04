@extends('layouts.dashboard')
    @section('content')
        <div class="container">
            <form action="index.html" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="d-block">Inserisci il titolo del comic</label>
                    <input name="title" type="text" placeholder="Inserisci il titolo">
                    <small class="form-text text-muted d-block">Titolo del comic</small>
                </div>

                <div class="form-group">
                    <label for="price" class="d-block">Inserisci il prezzo del comic</label>
                    <input name="price" type="number" min="0" step="0.01" placeholder="Inserisci il prezzo">
                    <small class="form-text text-muted d-block">Prezzo del comic</small>
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
                    <textarea name="description" id="" cols="60" rows="5"></textarea>>
                    <small class="form-text text-muted d-block">Descrizione del comic</small>
                </div>

                <div class="form-group">
                    <label for="artist" class="d-block">Inserisci l'artista del comic</label>
                    <input name="artist" type="text" placeholder="Inserisci l'artista">
                    <small class="form-text text-muted d-block">Artista del comic</small>
                </div>

                <div class="form-group">
                    <label for="writer" class="d-block">Inserisci lo scrittore del comic</label>
                    <input name="writer" type="text" placeholder="Inserisci lo scrittore">
                    <small class="form-text text-muted d-block">Scrittore del comic</small>
                </div>

                <div class="form-group">
                    <label for="serie" class="d-block">Inserisci la serie del comic</label>
                    <input name="serie" type="text" placeholder="Inserisci la serie">
                    <small class="form-text text-muted d-block">Titolo della seriec</small>
                </div>

                <div class="form-group">
                    <label for="date" class="d-block">Inserisci la data di rilascio del comic</label>
                    <input name="date" type="date">
                    <small class="form-text text-muted d-block">Data di rilascio</small>
                </div>

                <div class="form-group">
                    <label for="volume" class="d-block">Inserisci il volume d'uscita del comic</label>
                    <input name="volume" type="number" min="0" placeholder="Volume d'uscita">
                    <small class="form-text text-muted d-block">Volume d'uscita</small>
                </div>

                <div class="form-group">
                    <label for="size" class="d-block">Inserisci la grandezza del comic</label>
                    <input name="size" type="text" placeholder="Inserisci la grandezza">
                    <small class="form-text text-muted d-block">Grandezza del comic</small>
                </div>

                <div class="form-group">
                    <label for="pages" class="d-block">Inserisci le pagine del comic</label>
                    <input name="pages" type="number" min="0" placeholder="Pagine del comic">
                    <small class="form-text text-muted d-block">Pagine del comic</small>
                </div>

                <div class="form-group">
                    <label for="rated" class="d-block">Inserisci la classificazione del comic</label>
                    <input name="rated" type="text" placeholder="Inserisci la classificazione">
                    <small class="form-text text-muted d-block">Classificazione del comic</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @endsection