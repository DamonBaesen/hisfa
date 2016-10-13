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
            $user = new \App\Recyclesilos();
            $user->quantity = $faker->numberBetween(0,100);
            $user->type = $faker->name();
            $user->save();
        }
    }
}
