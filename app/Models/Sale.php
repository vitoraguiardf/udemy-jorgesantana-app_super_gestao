<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_id',
        'customer_id',
    ];

    function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    function customer() {
        return $this->belongsTo(Customer::class);
    }

    function products() {
        return $this->hasManyThrough(Product::class, SaleProducts::class, 'sale_id', 'id', 'id', 'product_id');
    }

}
