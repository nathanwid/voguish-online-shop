<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function product_rating(){
        return $this->hasMany(ProductRating::class);
    }
}
