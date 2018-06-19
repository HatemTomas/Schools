<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function schools(){

        return $this->belongsTo(School::class);
    }
}
