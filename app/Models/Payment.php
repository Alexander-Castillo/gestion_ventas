<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'payments';
    protected $fillable = [
        'credit_id',
        'payment_amount',
        'payment_date',
        'remaning_amount',
    ];
    // payments pertenece a creditos
    public function credit(){
        return $this->belongsTo(Credit::class);
    }
}
