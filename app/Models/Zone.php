<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    protected $table = 'zones';
    protected $fillable = ['zone_name'];
    // una zona tiene muchos clientes
    public function clients(){
        return $this->hasMany(Client::class);
    }
}
