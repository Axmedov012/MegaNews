<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $superAdmin->assignRole('admin');

        $editor = User::create([
            'first_name' => 'editor',
            'last_name' => 'editor',
            'user_name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $editor->assignRole('editor');

        $support = User::create([
            'first_name' => 'support',
            'last_name' => 'support',
            'user_name' => 'support',
            'email' => 'support@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $support->assignRole('support-manager');


        $user = User::create([
            'first_name' => 'user',
            'last_name' => 'user',
            'user_name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('user');
    }
}
