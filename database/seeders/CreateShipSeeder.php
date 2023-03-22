<?php

namespace Database\Seeders;

use App\Models\ship\ship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_main_groups')->insert([
        'code_main_group' => '1',
          'uuid' => '1',
          'name' => 'asdasdada',
          'ship_id' => '1',
        ]);
    }
}
