<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Utenti guests

Route::get('/', 'PageController@index')->name('homepage');
Route::get('/characters', 'PageController@characters')->name('characters');
//La route che ci serve da utilizzare
Route::get('/comics', 'ComicController@comics')->name('comics');
//La route che ci serve da visualizzare
Route::get('/comics/show/{comic}', 'ComicController@show')->name('comics.show');

Route::get('/movies', 'PageController@movies')->name('movies');
Route::get('/tv', 'PageController@tv')->name('tv');
Route::get('/games', 'PageController@games')->name('games');
Route::get('/videos', 'PageController@videos')->name('videos');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/shop', 'PageController@shop')->name('shop');


// Utente registrato
Auth::routes(['register' => false]);

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('comics', 'ComicController');
});
