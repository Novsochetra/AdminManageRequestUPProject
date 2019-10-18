<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            "name" => "permissions"
        ]);

        Permission::create([
            "name" => "tickets"
        ]);

        Permission::create([
            "name" => "users"
        ]);

        Permission::create([
            "name" => "comments"
        ]);

        Permission::create([
            "name" => "status"
        ]);

        Permission::create([
            "name" => "priority"
        ]);

        Permission::create([
            "name" => "roles"
        ]);
    }
}
