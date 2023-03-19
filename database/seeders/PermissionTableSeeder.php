<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'Role-List',
            'Role-Create',
            'Role-Edit',
            'Role-Delete',
            'Users-List',
            'Users-Create',
            'Users-Edit',
            'Users-Delete',
            'Inventory-List',
            'Inventory-Create',
            'Inventory-Edit',
            'Inventory-Delete',
            'Exiting-Data-List',
            'Exiting-Data-Create',
            'Exiting-Data-Edit',
            'Exiting-Data-Delete',
            'Inventory-Stock-List',
            'Inventory-Stock-Create',
            'Inventory-Stock-Edit',
            'Inventory-Stock-Delete',
            'Transaction-In-List',
            'Transaction-In-Create',
            'Transaction-In-Edit',
            'Transaction-In-Delete',
            'Transaction-Out-List',
            'Transaction-Out-Create',
            'Transaction-Out-Edit',
            'Transaction-Out-Delete',
            'Report-Inventory-List',
            'Report-Inventory-Create',
            'Report-Inventory-Edit',
            'Report-Inventory-Delete'
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}