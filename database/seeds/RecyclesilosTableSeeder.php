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
        foreach(range(1, 3) as $index)
        {
            $recyclesilo = new \App\Recyclesilo();
            $recyclesilo->quantity = $faker->numberBetween(0,100);
            $recyclesilo->type = $faker->name();
            $recyclesilo->save();
        }
    }
}
