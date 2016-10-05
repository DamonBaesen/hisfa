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
        $this->call(primesilos_seeder::class);
        $this->call(recyclesilos_seeder::class);
        $this->call(rawmaterials_seeder::class);
    }
}

class stocks_seeder extends Seeder
{
    public function run()
    {
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 8,
            'quantity' => 23,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 6,
            'quantity' => 11,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '1',
            'height' => 4,
            'quantity' => 3,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 8,
            'quantity' => 4,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 6,
            'quantity' => 23,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '2',
            'height' => 4,
            'quantity' => 15,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 8,
            'quantity' => 13,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 6,
            'quantity' => 30,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '3',
            'height' => 4,
            'quantity' => 23,
        ]); 
        
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 8,
            'quantity' => 1,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 6,
            'quantity' => 45,
        ]); 
        DB::table('stock')->insert([
            'qualityid' => '4',
            'height' => 4,
            'quantity' => 21,
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


class primesilos_seeder extends Seeder
{
    public function run()
    {
        DB::table('primesilos')->insert([
            'materialid' => '1',
            'quantity' => 80,
        ]); 
        DB::table('primesilos')->insert([
            'materialid' => '2',
            'quantity' => 50,
        ]); 
        DB::table('primesilos')->insert([
            'materialid' => '3',
            'quantity' => 30,
        ]); 
        DB::table('primesilos')->insert([
            'materialid' => '4',
            'quantity' => 70,
        ]); 
        DB::table('primesilos')->insert([
            'materialid' => '5',
            'quantity' => 10,
        ]); 
        DB::table('primesilos')->insert([
            'materialid' => '1',
            'quantity' => 100,
        ]);   
    }
}

class recyclesilos_seeder extends Seeder
{
    public function run()
    {
        DB::table('recyclesilos')->insert([
            'volume' => '50',
            'type' => '1',
        ]);
        DB::table('recyclesilos')->insert([
            'volume' => '80',
            'type' => '2',
        ]);
        DB::table('recyclesilos')->insert([
            'volume' => '40',
            'type' => '3',
        ]);
      
    }
}

class rawmaterials_seeder extends Seeder
{
    public function run()
    {
        DB::table('rawmaterials')->insert([
            'type' => 'f21MB-n',
            'quantity' => '10',
        ]);
        DB::table('rawmaterials')->insert([
            'type' => 'RF23W-n',
            'quantity' => '23',
        ]);
        DB::table('rawmaterials')->insert([
            'type' => 'KSE-20',
            'quantity' => '2',
        ]);
        DB::table('rawmaterials')->insert([
            'type' => 'KSE-30',
            'quantity' => '40',
        ]);
        DB::table('rawmaterials')->insert([
            'type' => 'RF23W-n',
            'quantity' => '10',
        ]);
        DB::table('rawmaterials')->insert([
            'type' => 'F21B-n',
            'quantity' => '25',
        ]);

    }
}
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


