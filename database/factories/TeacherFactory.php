<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'speciality'=>$faker->jobTitle,
        'image'=>$faker->imageUrl(400,200,'people'),
         'school_teacher_id'=>function(){
        return \App\School::all()->random();
    }
    ];
});
