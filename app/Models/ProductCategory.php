<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'product_id',
        'category',
    ];
    protected $table = 'product_categories';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
