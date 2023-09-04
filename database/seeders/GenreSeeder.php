<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
			  $genres=['درام','کوتاه','زندگی نامه','ترسناک','کمدی','تاریخی و سیاسی'];
			  
              DB::statement('truncate genres');
			 
			  foreach($genres as $genre){
               Genre::factory(1)->create(['name'=>$genre]);
			 }
    }
}
