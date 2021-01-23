<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
        'name' => $faker->word,
        'price' => $faker->numberBetween(100,1000),
        'desc' => $faker->paragraph,
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2,50)
    ];
});
