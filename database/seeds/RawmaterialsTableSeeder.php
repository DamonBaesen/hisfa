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
            $rawmaterial->orderd = $faker->numberBetween(1, 50);
            $rawmaterial->deliverd = $faker->numberBetween(1, 50);
            $rawmaterial->stock = $faker->numberBetween(1, 50);
            $rawmaterial->using = value(0);
            $rawmaterial->save();
        }

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->id = 999;
        $rawmaterialExtra->type = "";
        $rawmaterialExtra->orderd = 0;
        $rawmaterialExtra->deliverd = 0;
        $rawmaterialExtra->stock = 0;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();
    }
}
