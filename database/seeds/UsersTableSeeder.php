<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

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
            $user = new \App\User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make('admin');
            $user->save();
        }

        $user = new \App\User();
        $user->name = "tom";
        $user->email = "tom@changeme.hisfa";
        $user->password = Hash::make('hisfa');
        $user->save();

        $user = new \App\User();
        $user->name = "admin";
        $user->email = "admin@changeme.hisfa";
        $user->password = Hash::make('hisfa');
        $user->save();
    }
}
