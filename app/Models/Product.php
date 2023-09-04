<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Age;
use App\Models\Genre;

class Product extends Model
{
    use HasFactory;
	
    protected $fillable = ['name_book','author_id', 'shabak', 'code_book', 'entesharat', 'description' , 'main_price', 'off_price' , 'inventory', 'status','motarjem' ,'age_id','genre_id', 'image'];
	
	public function author()
    {
          return $this->belongsTo(Author::class);
    }	

	public function age()
    {
          return $this->belongsTo(Age::class);
    }	
	
	public function genre()
    {
          return $this->belongsTo(Genre::class);
    }

}
