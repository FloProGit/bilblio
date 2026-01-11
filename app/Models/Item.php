<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'title',
        'volume_number',
        'category_id',
        'serie_id',
        'description',
        'cover_image',
        'author',
        'year',
        'isbn',
        'publisher',
    ];
}
