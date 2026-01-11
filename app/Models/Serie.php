<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'series';
    protected $fillable = [
        'title',
        'category_id',
        'total_volume',
        'volume_type',
    ];
}
