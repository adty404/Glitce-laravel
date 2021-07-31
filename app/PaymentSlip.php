<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentSlip extends Model
{
    use SoftDeletes;
    
    protected $table = 'payment_slip';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasOne(Order::class);
    }
}
