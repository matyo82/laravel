<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\AgeSeeder;
use Database\Seeders\GenreSeeder;
use Illuminate\Support\Facades\Schema;



class DatabaseSeeder extends Seeder
{
          /**
           * Seed the application's database.
           */
          public function run(): void
          {
                     Schema::disableForeignKeyConstraints();
		             $this->call(UserSeeder::class);
		             $this->call(AgeSeeder::class);
		             $this->call(GenreSeeder::class);
		             $this->call(ProductSeeder::class);
		             $this->call(AuthorSeeder::class);
                     Schema::enableForeignKeyConstraints();
          }
}
