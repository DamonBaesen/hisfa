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
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 1;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 1;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 1;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 2;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 2;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 2;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 3;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 3;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 3;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 4;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 4;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 4;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 5;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 5;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 5;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 6;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 6;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 6;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 7;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 7;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 7;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 8;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 8;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 8;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 9;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 9;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 9;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 8;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 10;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 6;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 10;
        $stocks->save();
        
        $stocks = new \App\Stock();
        $stocks->height = 4;
        $stocks->quantity = $faker->numberBetween(0,50);
        $stocks->qualitie_id = 10;
        $stocks->save(); 
    }
}























