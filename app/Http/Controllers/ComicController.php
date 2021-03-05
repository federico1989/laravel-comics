<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    public function comics()
    {
        $comics=Comic::all();
        return view('guests.comics.comics', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('guests.comics.show', compact('comic'));
    }
}
