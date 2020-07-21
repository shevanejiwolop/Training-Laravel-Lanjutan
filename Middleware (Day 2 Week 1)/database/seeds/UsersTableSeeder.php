<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'name' => 'SuperAdmin',
            'email' => 'superadmin'.'@gmail.com',
            'password' => Hash::make('superadmin'),
            'role_id' => 2
            ]
        );
        User::create(
            [
            'name' => 'User',
            'email' => 'user'.'@gmail.com',
            'password' => Hash::make('user1209'),
            'role_id' => 0
            ]
        );
        User::create(
            [
            'name' => 'Admin',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('admin1209'),
            'role_id' => 1
            ]
        );
    }
}
