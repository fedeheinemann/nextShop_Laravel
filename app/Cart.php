<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // public $primaryKey = 'id';
    public $table = 'carts';
    public $timestamps = true;
    public $guarded = [];

    public function products()
    {
        return  $this->hasMany(Product::class, 'product_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }









}

 