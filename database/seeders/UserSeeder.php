<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'first_name' => 'super-admin',
            'last_name' => 'super-administrator',
            'user_name' => 'super admin',
            'email' => 'super-admin@gmail.com',
            'password' => bcrypt('superadmin'),
        ]);

        $superAdmin->assignRole('super-admin');
        

        
        $admin = User::create([
            'first_name' => 'admin',
            'last_name' => 'administrator',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);
    
        $admin->assignRole('admin');


        
        $manager = User::create([
            'first_name' => 'manager',
            'last_name' => 'manager',
            'user_name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('manager1234'),
        ]);

        $manager->assignRole('manager');


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
