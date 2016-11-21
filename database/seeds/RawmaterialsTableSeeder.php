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
        $rawmaterialExtra->orderd = 4;
        $rawmaterialExtra->deliverd = 10;
        $rawmaterialExtra->stock = 35;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "RF23W-n";
        $rawmaterialExtra->orderd = 20;
        $rawmaterialExtra->deliverd = 2;
        $rawmaterialExtra->stock = 45;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "KSE-20";
        $rawmaterialExtra->orderd = 7;
        $rawmaterialExtra->deliverd = 0;
        $rawmaterialExtra->stock = 30;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "KSE-30";
        $rawmaterialExtra->orderd = 10;
        $rawmaterialExtra->deliverd = 20;
        $rawmaterialExtra->stock = 30;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();

        $rawmaterialExtra = new \App\Rawmaterial();
        $rawmaterialExtra->type = "F21B-n";
        $rawmaterialExtra->orderd = 12;
        $rawmaterialExtra->deliverd = 2;
        $rawmaterialExtra->stock = 15;
        $rawmaterialExtra->using = value(0);
        $rawmaterialExtra->save();

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
