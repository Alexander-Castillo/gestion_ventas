<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamagedProducts extends Model
{
    //
    protected $table = 'damaged_products';
    protected $fillable = [
        'inventary_id',
        'delivery_id',
        'product_id',
        'quantity_damaged',
        'quantity_repaired',
        'quantity_lost',
        'report_date',
    ];
    // productos dañados pertenecen a un inventario
    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }
    // productos dañados pertenecen o sale de los envios
    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }
    // productos dañados pertenecen a un producto
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
