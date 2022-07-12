<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin with assigning permission
        $superAdmin = new Admin();
        $superAdmin->name = 'Super Admin';
        $superAdmin->email = 'admin@mail.com';
        $superAdmin->password = Hash::make('12345678');
        $superAdmin->phone = '7002342486';
        $superAdmin->save();
        $superAdminRole = Role::find(1);
        $superAdmin->assignRole($superAdminRole);

        // Admin with assigning permission
        $admin = new Admin();
        $admin->name = 'Manager';
        $admin->email = 'manager@mail.com';
        $admin->password = Hash::make('12345678');
        $admin->phone = '8486935380';
        $admin->save();
        $adminRole = Role::find(2);
        $admin->assignRole($adminRole);
    }
}
