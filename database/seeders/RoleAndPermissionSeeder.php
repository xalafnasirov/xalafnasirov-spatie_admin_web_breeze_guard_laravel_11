<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_role = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'admin']);
        $manager_role = Role::firstOrCreate(['name' => 'manager', 'guard_name' => 'admin']);

        Permission::firstOrCreate(['name'=> 'access-api', 'guard_name'=>'admin']);
        Permission::firstOrCreate(['name'=> 'manage-users', 'guard_name'=>'admin']);

        $admin_role->givePermissionTo('access-api');
        $manager_role->givePermissionTo('manage-users');

        // $manager = Admin::create([
        //     'name' => 'Admin admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // $admin = Admin::create([
        //     'name' => 'Jane Doe',
        //     'email' => 'jane@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);
        

        $admin = Admin::find(3);
        $manager = Admin::find(1);

        if ($admin) {
            $admin->assignRole('admin');
        }
        
        if ($manager) {
            $manager->assignRole('manager');
        }


        
    }
}
