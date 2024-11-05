<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mockery\Generator\StringManipulation\Pass\Pass;

class Credit extends Model
{
    //
    protected $table = 'credits';
    protected $fillable = [
        'client_id',
        'sale_id',
        'total_amount',
        'remaning_amount',
        'due_date',
        'last_payment_date',
    ];
    // creditos pertenecen a clientes
    public function client(){
        return $this->belongsTo(Client::class);
    }
    // creditos tienen muchos abonos
    public function passes(){
        return $this->hasMany(Pass::class);
    }
}
