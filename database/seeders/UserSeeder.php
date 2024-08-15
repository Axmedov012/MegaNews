<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'first_name' => 'admin',
            'last_name' => 'administrator',
            'user_name' => ' admin',
            'email' => 'super-admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        $superAdmin->assignRole('admin');

        $user = User::create([
            'first_name' => 'user',
            'last_name' => 'user',
            'user_name' => 'super user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1234'),
        ]);
        $user->assignRole('user');
    }
}
