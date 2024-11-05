<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $table = 'inventories';
    protected $fillable = [
        'product_id',
        'quantity_income',
        'total_cost',
        'income_date',
        'quantity_damage',
        'quantity_repair'
    ];
    // productos pertenecen a un inventario
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
