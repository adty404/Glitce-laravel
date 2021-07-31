<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;
    
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
