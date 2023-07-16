<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'regular',
            'description' => 'Regular User Role',
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'admin',
            'description' => 'Admin User Role',
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'webmaster',
            'description' => 'Webmaster User Role',
        ]);
    }
}
