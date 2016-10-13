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
            $stocks->height = $faker->numberBetween(4,8);
            $stocks->quantity = $faker->numberBetween(0,50);
            $stocks->quality_id = rand(1,10);
            $stocks->save();
        }
    }
}
