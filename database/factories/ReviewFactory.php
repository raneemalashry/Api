<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'customer_name' => $faker->name,
        'review' => $faker->paragraph,
        'star'=>$faker->numberBetween(1,5),
        'product_id' => function(){
            return Product::all()->random();
        },
    ];
});
