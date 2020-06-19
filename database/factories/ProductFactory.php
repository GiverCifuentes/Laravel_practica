<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->sentence(50),
        'price' => $faker->randomFloat($maxDecimals =2, $min=4, $max=100),
        'stock' => $faker->numberBetween(1,10),
        'status' => $faker->randomElement(['disponible','no disponible']),
    ];
});
