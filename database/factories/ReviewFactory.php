<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_name'=>$faker->name,
        'user_image'=>$faker->imageUrl(400,200,'people'),
        'user_number'=>$faker->phoneNumber,
        'user_review_massage'=>$faker->text(100),
        'school_review_id'=>function(){
            return \App\School::all()->random();
        }


    ];
});
