<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QualityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 6) as $index)
        {
            $quality = new \App\Quality();
            $quality->name = $faker->name();
            $quality->hardness = $faker->name();
            $quality->save();
        }
    }
}
