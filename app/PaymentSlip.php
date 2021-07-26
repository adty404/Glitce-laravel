<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSlip extends Model
{
    protected $table = 'payment_slip';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasOne(Order::class);
    }
}
