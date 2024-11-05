<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    //
    protected $table = 'sale_details';
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'price',
        'subtotal',
    ];
    // saleDetails pertenece a ventas
    public function sale(){
        return $this->belongsTo(Sale::class);
    }
    // saleDetails pertenece a productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
