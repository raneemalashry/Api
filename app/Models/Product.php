<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name' , 'price', 'desc', 'stock','discount'];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
