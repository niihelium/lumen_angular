<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Book extends Eloquent{

    //protected $collection = 'books';

    protected $fillable = [
        'title', 'author',
    ];
}
