<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';

    protected $fillable = [
        'user_id',
        'item_id',
        'contact_id',
        'lent_at',
        'returned_at',
        'expected_returned_date',
        'notes',
    ];
}
