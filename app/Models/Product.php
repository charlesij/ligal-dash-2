<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'brand',
        'stock',
        'sold',
        'liked',
        'rating',
        'price',
        'fixed_price',
        'discount',
        'discount_type',
        'availability',
    ];
    protected $table = 'products';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function productPhoto()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id', 'id');
    }
    public function productColor()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }
    public function productSize()
    {
        return $this->hasMany(ProductSize::class, 'product_id', 'id');
    }
    public function productDiscussion()
    {
        return $this->hasMany(ProductDiscussion::class, 'product_id', 'id');
    }
    public function productRating()
    {
        return $this->hasMany(ProductRating::class, 'product_id', 'id');
    }
    public function productCategory()
    {
        return $this->hasMany(ProductCategory::class, 'product_id', 'id');
    }
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'product_categories', 'product_id', 'category_id');
    }
}
