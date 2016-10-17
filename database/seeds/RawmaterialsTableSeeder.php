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
            $rawmaterial->type = $faker->unique()->name();
            $rawmaterial->quantity = $faker->numberBetween(1, 50);
            $rawmaterial->save();
        }

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->id = 0;
        $rawmaterialExtra->type = "";
        $rawmaterialExtra->quantity = 0;
        $rawmaterialExtra->save();
    }
}
