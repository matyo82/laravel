<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Genre;
use App\Models\Age;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              DB::statement('truncate products');
			  $ages=Age::pluck('id');
			  $genres=Genre::pluck('id');
			  
			  foreach($genres as $genre){
				foreach($ages as $age){
                Product::factory(1)->create(['author_id'=>rand(1,10),'genre_id'=>$genre,'age_id'=>$age]);
				  }
			}
    }
}
