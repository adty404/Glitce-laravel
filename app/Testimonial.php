<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';

    protected $guarded = [];

    protected $hidden = [];

    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
