<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nevisandeh extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bio','image'];

    public function products()
    {
          return $this->hasMany(Product::class);
    }
}
