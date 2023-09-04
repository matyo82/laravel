<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::statement('truncate authors');
		$products=Product::pluck('id');
		foreach($products as $product){
        Author::factory(10)->create(['product_id'=>$product]);		
			
		}

    }
}
