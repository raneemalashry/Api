<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['customer_name','review','star'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
