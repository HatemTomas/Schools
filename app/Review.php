<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function schools(){

        return $this->belongsTo(School::class);
    }
}
