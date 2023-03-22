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
            'ship-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        User::select()->get()->first()->assignRole([$role->id]);
    }
}
