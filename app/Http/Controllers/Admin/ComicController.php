<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBY('id', 'desc')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title);

        $validation = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'description' => 'required',
            'artist' => 'required',
            'writer' => 'required',
            'series' => 'required',
            'date' => 'required',
            'volume' => 'required',
            'size' => 'required',
            'pages' => 'required',
            'rated' => 'required',
            'nullable | mimes:jpeg,jpg,png,gif | max:500'
        ]);

        $validation['slug'] = $slug;
        $cover = Storage::disk('public')->put('comics_img', $request->cover);
        $validation['cover'] = $cover;

        Comic::create($validation);
        $comic = Comic::orderBy('id', 'desc')->first();

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        Storage::delete($comic->cover);
        $comics = $request->all();

        $slug = Str::slug($request->title);
        $comic['slug'] = $slug;

        $cover = Storage::disk('public')->put('comics_img', $request->cover);
        $comics['cover'] = $cover;


        $comic->update($comics);

        return redirect()->route('admin.comics.index', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comics.index');
    }
}
