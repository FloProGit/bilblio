<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrows';
    protected $fillable = [
        'user_id',
        'item_id',
        'contact_id',
        'borrow_at',
        'returned_at',
        'expected_returned_date',
        'notes',
        'borrow_item_title',
    ];
}
