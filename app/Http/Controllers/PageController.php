<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.index');
    }

    public function characters()
    {
        return view('guests.characters');
    }

    public function movies()
    {
        return view('guests.movies');
    }

    public function tv()
    {
        return view('guests.tv');
    }

    public function games()
    {
        return view('guests.games');
    }

    public function videos()
    {
        return view('guests.videos');
    }

    public function news()
    {
        return view('guests.news');
    }

    public function shop()
    {
        return view('guests.shop');
    }
}
