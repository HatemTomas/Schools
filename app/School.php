<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function teachers(){
        return $this->hasMany(Teacher::class,'school_teacher_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'school_review_id');
    }

    public function images(){
        return $this->hasMany(Image::class,'school_image_id');
    }
}
