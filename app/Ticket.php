<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;
    
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
