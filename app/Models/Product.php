<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'name',
        'img_url',
        'description',
        'price'
    ];

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
