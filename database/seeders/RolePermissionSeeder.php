<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'editor']);
        $permissions =[
            Permission::create(['name' => 'post:viewAny']),
            Permission::create(['name' => 'post:view']),
            Permission::create(['name' => 'post:create']),
            Permission::create(['name' => 'post:update']),
            Permission::create(['name' => 'post:delete']),
            Permission::create(['name' => 'team:viewAny']),
            Permission::create(['name' => 'team:view']),
            Permission::create(['name' => 'team:create']),
            Permission::create(['name' => 'team:update']),
            Permission::create(['name' => 'team:delete']),
            Permission::create(['name' => 'review:viewAny']),
            Permission::create(['name' => 'review:view']),
            Permission::create(['name' => 'review:create']),
            Permission::create(['name' => 'review:update']),
            Permission::create(['name' => 'review:delete']),
        ];
            $role->syncPermissions($permissions);

        $role = Role::create(['name' => 'user']);

        $role = Role::create(['name' => 'support-manager']);
        $HelpPermission = [
            Permission::create(['name' => 'post:index']),
            Permission::create(['name' => 'post:show']),
            Permission::create(['name' => 'team:index']),
            Permission::create(['name' => 'team:show']),
            Permission::create(['name' => 'user:index']),
            Permission::create(['name' => 'user:show']),
        ];
        $role->syncPermissions($HelpPermission);

    }
}
