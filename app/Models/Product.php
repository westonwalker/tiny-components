<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function licenses() {
        return $this->hasMany(License::class);
    }

    public function product_items() {
        return $this->hasMany(ProductItems::class);
    }
}