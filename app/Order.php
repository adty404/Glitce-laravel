<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

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
