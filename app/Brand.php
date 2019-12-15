<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // public $table = 'brands';
    // public $primaryKey = 'id';
    // public $timestamps = false;
    public $guarded = [];

    public function productsBrand()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}


