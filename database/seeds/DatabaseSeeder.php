<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\School::class , 4)->create();
        factory(App\Teacher::class , 10)->create();
        factory(App\Review::class , 8)->create();
        factory(App\Image::class , 15)->create();
    }
}
