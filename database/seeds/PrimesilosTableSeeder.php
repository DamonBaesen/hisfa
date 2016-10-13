<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PrimesilosTableSeeder extends Seeder
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
            $primesilos = new \App\Primesilos();
            $primesilos->quantity = $faker->numberBetween(0,100);
            $primesilos->material_id = rand(1,5);
            $primesilos->save();
        }
    }
}
