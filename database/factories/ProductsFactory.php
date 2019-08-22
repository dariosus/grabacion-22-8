<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Brand;
use App\Category;
use Faker\Generator as Faker;

$brands = Brand::all();
$categories = Category::all();

$factory->define(Product::class, function (Faker $faker) use ($brands, $categories) {
    return [
        "name" => $faker->realText(100),
        "price" => $faker->randomFloat(NULL, 0, 10000),
        "stock" => $faker->numberBetween(0, 100),
        "brand_id" => $brands->shuffle()[0]->id,
        "category_id" => $categories->shuffle()[0]->id
    ];
});
