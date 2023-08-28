<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nevisande_id' , 'name' , 'description' , 'price' , 'inventory' , 'image'];

    public function nevisandeh()
    {
          return $this->BelongsTo(nevisandeh::class);
    }
}
