<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    
    protected $table = 'status';

    protected $guarded = [];

    protected $hidden = [];

    public function order(){
        return $this->hasMany(Order::class);
    }
}
