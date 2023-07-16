<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'tag abc',
            'description' => 'Testing abc',
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'tag xyz',
            'description' => 'Testing xyz',
        ]);
    }
}
