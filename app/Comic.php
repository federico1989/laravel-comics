<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $fillable = ['title' , 'price', 'availability', 'description', 'artist', 'writer', 'series', 'date', 'volume', 'size', 'pages', 'rated', 'slug'];

}
