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
<<<<<<< HEAD
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
=======
        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "f21MB-n";
        $rawmaterialExtra->quantity = 45;
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "RF23W-n";
        $rawmaterialExtra->quantity = 3;
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "KSE-20";
        $rawmaterialExtra->quantity = 4;
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "KSE-30";
        $rawmaterialExtra->quantity = 90;
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "F21B-n";
        $rawmaterialExtra->quantity = 67;
        $rawmaterialExtra->save();
>>>>>>> master

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
