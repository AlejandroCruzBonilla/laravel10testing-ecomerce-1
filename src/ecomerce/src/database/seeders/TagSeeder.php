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
            'name' => 'tag abc 1 ',
            'description' => 'Testing abc 1',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 2 ',
            'description' => 'Testing xyz 2',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 3 ',
            'description' => 'Testing abc 3',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 4 ',
            'description' => 'Testing xyz 4',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 5 ',
            'description' => 'Testing abc 5',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 6 ',
            'description' => 'Testing xyz 6',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 7 ',
            'description' => 'Testing abc 7',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 8',
            'description' => 'Testing xyz 8',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 9',
            'description' => 'Testing abc 9',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 10',
            'description' => 'Testing xyz 10',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 11',
            'description' => 'Testing abc 11',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 12',
            'description' => 'Testing xyz 12',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 13',
            'description' => 'Testing abc 13',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 14',
            'description' => 'Testing xyz 14',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 15',
            'description' => 'Testing abc 15',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 16',
            'description' => 'Testing xyz 16',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 17',
            'description' => 'Testing xyz 17',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 18',
            'description' => 'Testing abc 18',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 19',
            'description' => 'Testing xyz 19',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 20',
            'description' => 'Testing xyz 20',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag abc 21',
            'description' => 'Testing abc 21',
        ]);

        DB::table('tags')->insert([
            'name' => 'tag xyz 22',
            'description' => 'Testing xyz 22',
        ]);
    }
}
