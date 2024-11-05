<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliverDay extends Model
{
    // 
    protected $table = 'deliver_days';
    protected $fillable = [
        'client_id',
        'days_of_week',
    ];
    // fechas o dias de entregas pertenecen a clientes
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
