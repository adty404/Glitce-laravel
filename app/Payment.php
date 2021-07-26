<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
