<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmptyBottle extends Model
{
    //
    protected $table = 'empty_bottles';
    protected $fillable = [
        'product_id',
        'empty_quantity',
    ];
    // de productos salen los botellas vacias
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
