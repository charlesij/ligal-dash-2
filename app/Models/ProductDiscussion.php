<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDiscussion extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'discussion',
    ];
    protected $table = 'product_discussions';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
