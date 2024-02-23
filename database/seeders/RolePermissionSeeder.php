<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::findByName('super-admin');
        $superAdminRole->syncPermissions(['create-post', 'edit-post', 'delete-post']);

        $adminRole = Role::findByName('admin');
        $adminRole->syncPermissions(['create-post', 'edit-post']);

        $userRole = Role::findByName('user');
    }
}
