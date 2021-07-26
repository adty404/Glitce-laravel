<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
