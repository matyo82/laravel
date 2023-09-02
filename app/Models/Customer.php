<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    public function sales():HasMany
    {
        return $this->hasMany(Sale::class);
    }
    public function walet():HasOne
    {
        return $this->hasOne(Walet::class);
    }
}
