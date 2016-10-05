<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(stocks_seeder::class);
        $this->call(quality_seeder::class);
    }
}

class stocks_seeder extends Seeder
{
    public function run()
    {
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 1,
            'quantity' => 23,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 2,
            'quantity' => 11,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 3,
            'quantity' => 3,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 4,
            'quantity' => 30,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 1,
            'quantity' => 4,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 2,
            'quantity' => 23,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 3,
            'quantity' => 15,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 4,
            'quantity' => 20,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 1,
            'quantity' => 13,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 2,
            'quantity' => 30,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 3,
            'quantity' => 23,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 4,
            'quantity' => 24,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 1,
            'quantity' => 1,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 2,
            'quantity' => 45,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 3,
            'quantity' => 21,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 4,
            'quantity' => 7,
        ]); 

    }
}

class quality_seeder extends Seeder
{
    public function run()
    {
        //
        DB::table('quality')->insert([
            'name' => 'P15',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => 'P20',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => 'P25',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => 'P30',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => 'P35',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => '60SE',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => '100SE',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => '150SE',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => '200SE',
            'hardness' => str_random(4),
        ]); 
        
        DB::table('quality')->insert([
            'name' => '250SE',
            'hardness' => str_random(4),
        ]); 
    }
}


