<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'image1'=>$faker->imageUrl(400,200,'business'),
        'image2'=>$faker->imageUrl(400,200,'business'),
        'image3'=>$faker->imageUrl(400,200,'business'),
        'image4'=>$faker->imageUrl(400,200,'business'),
        'image5'=>$faker->imageUrl(400,200,'business'),
        'school_image_id'=>function(){
            return \App\School::all()->random();
        }
    ];
});
