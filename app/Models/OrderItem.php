<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderItem extends Model
{
    use HasFactory;

	public function singleProduct()
	{
	    return $this->belongsTo(Product::class,'product_id');
	}
}
