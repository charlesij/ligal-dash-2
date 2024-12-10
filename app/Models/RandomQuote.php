<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RandomQuote extends Model
{
    protected $fillable = [
        'random_quote',
        'personalized_quote',
    ];
    protected $table = 'random_quotes';
}