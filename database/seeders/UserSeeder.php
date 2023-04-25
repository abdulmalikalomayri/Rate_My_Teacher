<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'example',
                'email' => 'example@example.com',
                'username' => 'example',
                'password' => bcrypt('password'),
            ]
            ];

        app('db')->table('users')->delete();
        app('db')->table('users')->insert($users);
    }
}
