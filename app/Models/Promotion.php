<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table = 'promotions';
    protected $fillable = [
        'product_id',
        'quantity_promo',
        'promotion_price',
    ];
    // las promociones pertenecen a los productos
    public function product(){
        return $this->belongsTo(Product::class);  // relacion de uno a muchos con la tabla productos
    }
}
