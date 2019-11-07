<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456789');
        $user->role = \App\Http\RoleInterface::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'guest';
        $user->email = 'guest@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456789');
        $user->role = \App\Http\RoleInterface::GUEST;
        $user->save();
    }
}
