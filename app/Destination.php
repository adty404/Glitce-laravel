<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
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
