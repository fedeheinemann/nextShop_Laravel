<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // public $table = 'carts';
    // public $primaryKey = 'id';
    // public $timestamps = false;
    public $guarded = [];

    public function toBuy()
    {
        return  $this->belongsToMany(Product::class);
    }









}

 