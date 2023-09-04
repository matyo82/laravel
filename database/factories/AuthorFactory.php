<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nevisandeh>
 */
class AuthorFactory extends Factory
{
          /**
           * Define the model's default state.
           *
           * @return array<string, mixed>
           */
          public function definition(): array
          {
                    return [
                              'name' => fake()->name(),
                              'bio' => fake()->paragraph(),
                              'image' => 'public/images/fakes/person.avif',
                    ];
          }
}
