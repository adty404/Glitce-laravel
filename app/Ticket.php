<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function destination(){
        return $this->hasOne(Destination::class);
    }
}
