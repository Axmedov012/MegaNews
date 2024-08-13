<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => 'administrator',
            'user_name' => 'super admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'first_name' => 'user',
            'last_name' => 'user',
            'user_name' => 'super user',
            'email' => 'user@user.com',
            'password' => bcrypt('user1234'),
        ]);
    }
}
