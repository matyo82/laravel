<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
          /**
           * Define the model's default state.
           *
           * @return array<string, mixed>
           */
          public function definition(): array
          { 
                    return [
                              'name_book' => fake()->name(),
                              'entesharat' => fake()->lastName(),
                              'description' => fake()->paragraph(),
                              'shabak' => rand(1000000 , 9999999),
                              'code_book' => rand(1000000 , 9999999),
                              'entesharat' => fake()->lastName(),
                              'main_price' => rand(100000 , 900000),
                              'off_price' => rand(100000 , 900000),
                              'inventory' => rand(0 , 20),
                              'image' => 'public/images/fakes/cart.avif',
                              'status' => 1,
                    ];
          }
}
