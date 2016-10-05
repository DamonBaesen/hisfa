<?php

use Illuminate\Database\Seeder;

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

