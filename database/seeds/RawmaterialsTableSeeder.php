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

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->id = 999;
        $rawmaterialExtra->type = "N/A";
        $rawmaterialExtra->quantity = 0;
        $rawmaterialExtra->save();
    }
}
