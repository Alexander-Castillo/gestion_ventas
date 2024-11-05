<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table = 'sales';
    protected $fillable = [
        'deliver_id',
        'client_id',
        'sale_date',
        'total_amount',
    ];
    // las ventas pertencen a un viaje
    public function delivery(){
        return $this->belongsTo(Delivery::class, 'deliver_id');
    }
    // las ventas pertencen a clientes
    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
    // ventas tiene muchos saleDetails
    public function saleDetails(){
        return $this->hasMany(SaleDetail::class,'sale_id');
    }
    // las ventas pueden tener muchos credits
    public function credits(){
        return $this->hasMany(Credit::class,'sale_id');
    }
}
