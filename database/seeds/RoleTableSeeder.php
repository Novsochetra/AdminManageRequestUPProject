<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Role::class, 3)->create();
        Role::create(["name" => "super admin"]);
        Role::create(["name" => "admin"]);
        Role::create(["name" => "user"]);
        Role::create(["name" => "technical"]);
    }
}
