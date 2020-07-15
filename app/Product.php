<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'productos';

    protected $fillable = [

        'name','price','image','description','stock'
    ];
}
