<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nevisandeh;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Schema;



class DatabaseSeeder extends Seeder
{
          /**
           * Seed the application's database.
           */
          public function run(): void
          {
                    Nevisandeh::factory()
                              ->has(Product::factory()->count(3))
                              ->create();

                    // \App\Models\User::factory()->create([
                    //     'name' => 'Test User',
                    //     'email' => 'test@example.com',
                    // ]);

                    // Schema::disableForeignKeyConstraints();
                    // $this->call(UserSeeder::class);
                    // Schema::enableForeignKeyConstraints();
          }
}
