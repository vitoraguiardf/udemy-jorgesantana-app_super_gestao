<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleProducts extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_id',
        'product_id',
        'cost',
        'rebate',
    ];

    function sale() {
        return $this->belongsTo(Sale::class);
    }
    
    function product() {
        return $this->belongsTo(Product::class);
    }

}
