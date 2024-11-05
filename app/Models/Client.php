<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'clients';
    protected $fillable = [
        'client_name',
        'client_adress',
        'zone_id',
        'client_type',
        'status',
    ];
    // un cliente pertence a una zona
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
    // un cliente tiene muchos dias de compra
    public function deliverDays(){
        return $this->hasMany(DeliverDay::class);
    }
    // un cliente tiene muchas ventas
    public function sales(){
        return $this->hasMany(Sale::class);
    }
    // un cliente puede tener uno o mas precios personalizados
    public function customPrices(){
        return $this->hasMany(CustomPrice::class);
    }
    // un cliente puede tener uno o mas creditos
    public function credits(){
        return $this->hasMany(Credit::class);
    }
    // un cliente tiene que retornar uno o mas botellas vacias
    public function returnedEmptyBottles(){
        return $this->hasMany(EmptyBottle::class);
    }
    // un cliente puede tener pending clientes
    public function pendingClients(){
        return $this->hasMany(PendingClient::class);
    }
}
