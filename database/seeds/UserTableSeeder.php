<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Role::class, 5)->create()->each(function ($role) {
        //     $role->users()->save(factory(App\User::class)->make());
        // });
        
        $user = new User();
        $r = Role::where('name', 'super admin')->first();
        $user->role()->associate($r);

        $user->name = 'super admin';
        $user->email = 'superadmin@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();

        // ========================================
        $user = new User();
        $r = Role::where('name', 'admin')->first();
        $user->role()->associate($r);

        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
        
        // ========================================

        $user = new User();
        $r = Role::where('name', 'user')->first();
        $user->role()->associate($r);

        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
        
        // ========================================
        $user = new User();
        $r = Role::where('name', 'technical')->first();
        $user->role()->associate($r);

        $user->name = 'technical';
        $user->email = 'technical@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
        
        // ========================================

    }
}
