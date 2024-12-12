<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'reviews',
        'reviews_liked',
    ];
    protected $table = 'product_ratings';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
