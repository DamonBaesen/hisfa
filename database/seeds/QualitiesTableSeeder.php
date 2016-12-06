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
        $qualities = new \App\Qualitie();
        $qualities->name = "P15";
        $qualities->hardness = "Soft";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "P20";
        $qualities->hardness = "Soft";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "P25";
        $qualities->hardness = "Hard";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "P30";
        $qualities->hardness = "Hard";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "P35";
        $qualities->hardness = "Medium";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "60SE";
        $qualities->hardness = "Medium";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "100SE";
        $qualities->hardness = "Medium";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "150SE";
        $qualities->hardness = "Hard";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "200SE";
        $qualities->hardness = "Hard";
        $qualities->save();

        $qualities = new \App\Qualitie();
        $qualities->name = "250SE";
        $qualities->hardness = "Soft";
        $qualities->save();

    }
}
