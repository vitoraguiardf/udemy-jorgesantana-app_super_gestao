<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'vendor_id',
    ];

    function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    function sales() {
        return $this->hasManyThrough(Sale::class, SaleProducts::class, 'product_id', 'id', 'id', 'sale_id');
    }

}
