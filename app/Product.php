<?php

namespace App;
use App\Brand;
use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    // public $primaryKey = 'id';
    // public $timestamps = false;
    public $guarded = [];

    // public function myCarts()
    // {
    //     return $this->hasMany(Cart::class, 'id');
    // }
    
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getUsers()
    {
        return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')->withPivot('quantity');
    }


}

