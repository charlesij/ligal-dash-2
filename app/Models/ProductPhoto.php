<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable = [
        'product_id',
        'photo',
    ];
    protected $table = 'product_photos';
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function productSize()
    {
        return $this->hasOne(ProductSize::class, 'product_photo', 'id');
    }
    public function productColor()
    {
        return $this->hasOne(ProductColor::class, 'product_photo', 'id');
    }
}
