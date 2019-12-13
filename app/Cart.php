<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // public $primaryKey = 'id';
    public $table = 'carts';
    public $timestamps = true;
    public $guarded = [];

    public function toBuy()
    {
        return  $this->belongsToMany(Product::class);
    }









}

 