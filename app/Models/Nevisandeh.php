<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nevisandeh extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bio','image'];

    public function products():HasMany
    {
          return $this->hasMany(Product::class);
    }
}
