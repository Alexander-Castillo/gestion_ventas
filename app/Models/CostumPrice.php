<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomPrice extends Model
{
    //
    protected $table = 'custom_prices';
    protected $fillable = [
        'client_id',
        'product_id',
        'custom_price'
    ];
    // precios personalizados pertenecen clientes
    public function client(){
        return $this->belongsTo(Client::class);
    }
    // precios personalizados pertenecen a productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
}