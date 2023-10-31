<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    function products() {
        return $this->hasMany(Product::class);
    }

    function sales() {
        return $this->hasMany(Sale::class);
    }

}
