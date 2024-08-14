<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
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
            'create role',
            'update role',
            'delete role',
            'create permission',
            'update permission',
            'delete permission',
            'assign role',
            'assign permission',
            'remove role',
            'remove permission',
        ];

        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
