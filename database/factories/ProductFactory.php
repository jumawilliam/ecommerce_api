<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'detail'=>$faker->paragraph,
        'price'=>$faker->NumberBetween(1000,200000),
        'stock'=>$faker->randomdigit,
        'discount'=>$faker->NumberBetween(2,30),
        
    ];
});
