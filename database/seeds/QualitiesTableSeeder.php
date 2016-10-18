<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QualitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 10) as $index)
        {
            $qualities = new \App\Qualitie();
            $qualities->name = $faker->name();
            $qualities->hardness = $faker->name();
            $qualities->save();
        }

    }
}
