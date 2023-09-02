<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nevisandeh_id' , 'name' , 'description' , 'price' , 'inventory' , 'image','categorie_id', 'published_date'];

    public function nevisandeh()
    {
          return $this->BelongsTo(nevisandeh::class);
    }
    public function caregorie(): BelongsTo
    {
        return $this->belongsTo(Caregorie::class);
    }
}
