<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use SoftDeletes;

    protected $table = 'destination';

    protected $guarded = [];

    protected $hidden = [];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function testimonial(){
        return $this->hasMany(Testimonial::class);
    }
}
