<?php

use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'address'=>$faker->address,
        'fax_number'=>$faker->buildingNumber,
        'check_in_day'=>$faker->dayOfWeek,
        'check_out_day'=>$faker->dayOfWeek,
        'check_in_time'=>$faker->numberBetween(8,9),
        'check_out_time'=>$faker->numberBetween(3,4),
        'number'=>$faker->phoneNumber,
        'email'=>$faker->companyEmail,
        'vision_and_massage'=>$faker->text(800)

    ];
});
