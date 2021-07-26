<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $guarded = [];

    protected $hidden = [];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function payment_slip(){
        return $this->belongsTo(PaymentSlip::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
