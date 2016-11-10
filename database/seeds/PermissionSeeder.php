<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permission_list = array("dashboard", "stockview", "stockmanage", "recycleview", "recyclemanage", "siloview","silomanage","usermanage");
        $length = count($permission_list);
        for ($i = 0; $i < $length; $i++) {
            $permission = new \App\Permission();
            $permission->permission = $permission_list[$i];
            $permission->save();
        }

    }
}
