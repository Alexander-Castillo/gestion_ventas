<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryStock extends Model
{
    //
    protected $table = 'delivery_stocks';
    protected $fillable = [
        'delivery_id',
        'product_id',
        'stock',
        'quantity_returned',
        'quantity_damaged',
    ];
    // delivery_stocks pertenecen a los viajes o entregas
    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }
    // delivery_stocks pertenecen a los productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
