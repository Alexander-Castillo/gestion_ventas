<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentStock extends Model
{
    //
    protected $table = 'current_stocks';
    protected $fillable = [
        'delivery_id', 
        'product_id',
        'current_quantity',
    ];
    // current stock esta presente o pertenece a deliveries
    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }
    // current stock esta presente o pertenece a productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
    
}
