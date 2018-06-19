<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function schools(){
        return $this->belongsTo(School::class);
    }
}
