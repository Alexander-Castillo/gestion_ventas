<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $table = 'deliveries';
    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
    ];
    // un usuario tiene entregas
    public function user(){
        return $this->belongsTo(User::class);
    }
    // una o mas entrega puede estar en muchas ventas
    public function sales(){
        return $this->hasMany(Sale::class);
    }
    // un entrega puede tener muchos stock de entregas
    public function deliveryStock(){
        return $this->hasMany(DeliveryStock::class);
    }
    // de las entregas pueden haber muchos clientes pendientes
    public function pendingClients(){
        return $this->hasMany(PendingClient::class);
    }
}
