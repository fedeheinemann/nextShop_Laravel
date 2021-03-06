<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    // public $primaryKey = 'id';
    // public $timestamps = false;
    public $guarded = [];

    public function productsCategory()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
