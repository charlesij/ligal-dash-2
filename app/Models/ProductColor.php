<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = [
        'product_id',
        'product_photo',
        'color',
    ];

    protected $table = 'product_colors';
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function productPhoto()
    {
        return $this->belongsTo(ProductPhoto::class, 'product_photo_id', 'id');
    }
}
