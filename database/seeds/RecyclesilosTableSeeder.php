<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RecyclesilosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            $recyclesilo = new \App\Recyclesilo();
            $recyclesilo->quantity = $faker->numberBetween(0,100);
            $recyclesilo->type = "Soft";
            $recyclesilo->save();

        $recyclesilo = new \App\Recyclesilo();
        $recyclesilo->quantity = $faker->numberBetween(0,100);
        $recyclesilo->type = "Soft";
        $recyclesilo->save();

        $recyclesilo = new \App\Recyclesilo();
        $recyclesilo->quantity = $faker->numberBetween(0,100);
        $recyclesilo->type = "Medium";
        $recyclesilo->save();

    }
}
