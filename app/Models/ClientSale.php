<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientSale extends Model
{
    //
    protected $table = 'client_sales';
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'price',
        'sale_type',
        'payment_type',
        'total_amount',
    ];
    // las ventas de cliente pertencen a ventas
    public function sale(){
        return $this->belongsTo(Sale::class);
    }
    // las ventas de cliente pertencen a productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
