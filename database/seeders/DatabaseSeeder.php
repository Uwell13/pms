<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'username' => 'superadmin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('12345678'),
        //     'avatar' => 'avatar/avatar1.png'
        // ]);

        // $role = Role::create(['name' => 'Admin']);

        // $permissions = [
        //     'office',
        //     'ship',
        //     'users-list',
        //     'users-create',
        //     'users-edit',
        //     'users-delete',
        //     'role-list',
        //     'role-create',
        //     'role-edit',
        //     'role-delete',
        //     'ship-list',
        //     'ship-create',
        //     'ship-edit',
        //     'ship-delete',
        //     'crew-list',
        //     'crew-create',
        //     'crew-edit',
        //     'crew-delete',
        //     'Inventory-List',
        //     'Inventory-Create',
        //     'Inventory-Edit',
        //     'Inventory-Delete',
        //     'Exiting-Data-List',
        //     'Exiting-Data-Create',
        //     'Exiting-Data-Edit',
        //     'Exiting-Data-Delete',
        //     'Inventory-Stock-List',
        //     'Inventory-Stock-Create',
        //     'Inventory-Stock-Edit',
        //     'Inventory-Stock-Delete',
        //     'Transaction-In-List',
        //     'Transaction-In-Create',
        //     'Transaction-In-Edit',
        //     'Transaction-In-Delete',
        //     'Transaction-Out-List',
        //     'Transaction-Out-Create',
        //     'Transaction-Out-Edit',
        //     'Transaction-Out-Delete',
        //     'Report-Inventory-List',
        //     'Report-Inventory-Create',
        //     'Report-Inventory-Edit',
        //     'Report-Inventory-Delete'
        // ];

        // foreach ($permissions as $permission) {
        //     Permission::create(['name' => $permission]);
        // }

        // $permissions = Permission::pluck('id', 'id')->all();

        // $role->syncPermissions($permissions);

        // User::select()->get()->first()->assignRole([$role->id]);
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'avatar/avatar1.png'
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = [
            'office',
            'ship',
            'users-list',
            'users-create',
            'users-edit',
            'users-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'ship-list',
            'ship-create',
            'ship-edit',
            'ship-delete',
            'crew-list',
            'crew-create',
            'crew-edit',
            'crew-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        User::select()->get()->first()->assignRole([$role->id]);
    }
}
