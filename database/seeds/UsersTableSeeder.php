<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permission = \App\Permission::create(['name' => 'viewdashboard']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'viewblocks']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'manageblocks']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'viewrecyclesilos']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'managerecyclesilos']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'viewprimesilos']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'manageprimesilos']);
        $permission->save();
        $permission = \App\Permission::create(['name' => 'manageusers']);
        $permission->save();


        $faker = Faker::create();
        foreach(range(1, 10) as $index)
        {
            $user = new \App\User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make('admin');
            $user->save();
            $user->givePermissionTo('viewdashboard');
        }

        $user = new \App\User();
        $user->name = "tom";
        $user->email = "tom@changeme.hisfa";
        $user->admin = 1;
        $user->password = Hash::make('hisfa');
        $user->save();
        $user->givePermissionTo('viewdashboard', 'viewblocks', 'manageblocks', 'viewrecyclesilos', 'managerecyclesilos', 'viewprimesilos', 'manageprimesilos', 'manageusers');

    }
}
