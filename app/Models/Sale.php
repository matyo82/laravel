<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity', 'customer_id', 'book_id'];

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class);
    }
    public function books():BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
