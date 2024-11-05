<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'unit_price',
        'purchase_price',
    ];
    // productos pueden tener muchos currentStock
    public function currentStock(){
        return $this->hasMany(CurrentStock::class, 'product_id');
    }
    // productos tiene o puede estar en muchos saleDetails
    public function saleDetails(){
        return $this->hasMany(SaleDetail::class, 'product_id');
    }
    // productos tienen muchas promociones
    public function promotions(){
        return $this->hasMany(Promotion::class, 'product_id');
    }
    // productos tienen muchos emptyBottles
    public function emptyBottles(){
        return $this->hasMany(EmptyBottle::class, 'product_id');
    }
    // productos tienen muchos precios personalizados
    public function customPrices(){
        return $this->hasMany(CustomPrice::class, 'product_id');
    }
}
