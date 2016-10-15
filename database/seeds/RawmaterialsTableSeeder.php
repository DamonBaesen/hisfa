<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RawmaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 5) as $index)
        {
            $rawmaterial = new \App\Rawmaterial();
            $rawmaterial->type = $faker->name();
            $rawmaterial->quantity = $faker->numberBetween(1, 50);
            $rawmaterial->save();
        }
    }
}
