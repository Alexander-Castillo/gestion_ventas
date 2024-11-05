<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnEmptyBottle extends Model
{
    //
    protected $table = 'return_empty_bottles';
    protected $fillable = [
        'product_id',
        'client_id',
        'return_date',
        'quantity_returned',
        'status',
    ];
    // las botellas vacias pertenecen a los productos
    public function product(){
        return $this->belongsTo(Product::class);
    }
    // las botellas vacias las entregan los clientes
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
