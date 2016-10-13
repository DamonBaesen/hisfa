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
         $this->call(UsersTableSeeder::class);
        $this->call(QualitiesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
         $this->call(RecyclesilosTableSeeder::class);
         $this->call(RawmaterialsTableSeeder::class);
         $this->call(PrimesilosTableSeeder::class);
    }
}