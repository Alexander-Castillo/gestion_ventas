<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendingClient extends Model
{
    //
    protected $table = 'pending_clients';
    protected $fillable = [
        'client_id',
        'delivery_id',
        'reason',
        'pending_date',
    ];
    // clientes pendientes le pertenecen a los clientes
    public function client(){
        return $this->belongsTo(Client::class);
    }
    // los clientes pendientes son de las entregas
    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }
}
