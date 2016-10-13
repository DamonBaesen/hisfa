<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StocksTableSeeder extends Seeder
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
            $stocks = new \App\Stock();
            $stocks->name = $faker->name();
            $stocks->hardness = $faker->name();
            $stocks->quality_id = rand(1,5);
            $stocks->save();
        }
    }
}
