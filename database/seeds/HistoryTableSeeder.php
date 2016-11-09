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
            $history->action = $faker->sentence(6);
            $history->sector = $faker->sentence(1);
            $history->silonr = $faker->numberBetween(1,6);
            $history->user_id = $faker->numberBetween(1,10);
            $history->save();
        }
    }
}
