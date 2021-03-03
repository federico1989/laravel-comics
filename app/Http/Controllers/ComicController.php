<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics()
    {
        return view('guests.comics.comics');
    }
}
