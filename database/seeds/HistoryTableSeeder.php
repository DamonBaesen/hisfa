<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistoryTableSeeder extends Seeder
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
            $history = new \App\History();
            $history->quantity = $faker->numberBetween(0,100);
            $history->material_id = rand(1,5);
            $history->save();
        }
    }
}
