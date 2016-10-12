<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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
            $user = new \App\Users();
            $user->name = $faker->name();
            $user->email = $faker->name();
            $user->password = $faker->password();
            $user->save();
        }
    }
}
