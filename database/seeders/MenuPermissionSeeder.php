<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MenuPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'menu_access',
            'menu_create',
            'menu_show',
            'menu_edit',
            'menu_delete'
        ];

        $role = Role::findByName('Super Admin');

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
            $role->givePermissionTo($permission);
        }
    }
}
