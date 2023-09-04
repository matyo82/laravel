<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Age;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
			  $ages=['6-10','10-15','15-25'];
              DB::statement('truncate ages');
              
			  foreach($ages as $age){
			  Age::factory(1)->create(['name'=>$age]);
			  }
    }
}
