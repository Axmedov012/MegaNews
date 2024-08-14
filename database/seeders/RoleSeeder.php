<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $superAdmin = Role::create(['name' => 'super-admin']);
       $superAdmin->givePermissionTo(Permission::all());
       
       $admin = Role::create(['name' => 'admin']);
       $admin->givePermissionTo([
        'index user',
        'delete user',
        'show user',
        'index category',
        'show category',
        'create category',
        'delete category',
        'update category',
        'index comment',
        'show comment',
        'create comment',
        'update comment',
        'delete comment',
        'index post-photos',
        'create post-photos',
        'update post-photos',
        'show post-photos',
        'delete post-photos',
        'index post-review',
        'show post-review',
        'create post-review',
        'update post-review',
        'delete post-review',
        'index tag',
        'show tag',
        'create tag',
        'update tag',
        'delete tag',
        'index team',
        'show team',
        'create team',
        'update team',
        'delete team',
        'index user-photo',
        'show user-photo',
        'create user-photo',
        'update user-photo',
        'delete user-photo',
        'index post-video',
        'show post-video',
        'create post-video',
        'update post-video',
        'delete post-video',
       ]);

       
       $manager = Role::create(['name'=> 'manager']);

       $manager->givePermissionTo([
        'index user',
        'show user',
        'index category',
        'show category',
        'create category',
        'delete category',
        'update category',
        'index comment',
        'show comment',
        'index post-photos',
        'show post-photos',
        'index post-review',
        'show post-review',
        'create post-review',
        'index tag',
        'show tag',
        'create tag',
        'update tag',
        'delete tag',
        'index team',
        'show team',
        'create team',
        'index user-photo',
        'show user-photo',
        'index post-video',
        'show post-video',
       ]);
       
       $user = Role::create(['name'=> 'user']);

       $user->givePermissionTo([
        'show user',
        'index category',
        'show category',
        'index comment',
        'show comment',
        'index post-photos',
        'show post-photos',
        'index post-review',
        'show post-review',
        'index tag',
        'show tag',
        'index team',
        'show team',
        'index user-photo',
        'show user-photo',
        'index post-video',
        'show post-video',
       ]);
    }
}
