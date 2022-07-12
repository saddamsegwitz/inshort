<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions
        $permissions = [
            'user_management_access',
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            'permission_access',
            'role_create',
            'role_edit',
            'role_show',
            'role_delete',
            'role_access',
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'user_access',
            'post_create',
            'post_edit',
            'post_delete',
            'post_show',
            'post_access',
            'comment_create',
            'comment_edit',
            'comment_delete',
            'comment_show',
            'comment_access',
            'poll_create',
            'poll_delete',
            'poll_edit',
            'poll_show',
            'poll_access',
            'ads_create',
            'ads_edit',
            'ads_delete',
            'ads_show',
            'ads_access'
        ];

        foreach($permissions as $permission){
            Permission::create([
                'name' => $permission
            ]);
        }

        //get all permissions via Gate::before rule;
        Role::create(['name' => 'Super Admin']);
        $role = Role::create(['name' => 'Manager']);
        $managerPermissions = [
            'post_show',
            'post_access',
            'comment_show',
            'comment_access',
            'comment_show',
            'poll_create',
            'poll_delete',
            'poll_edit',
            'poll_show',
            'poll_access',
            'ads_create',
            'ads_edit',
            'ads_delete',
            'ads_show',
            'ads_access'
        ];

        foreach ($managerPermissions as $managerPermission) {
            $role->givePermissionTo($managerPermission);
        }
    }
}
