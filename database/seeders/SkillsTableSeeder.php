<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table()->insert() inserts multiple records into a database
        DB::table('skills')->insert([
            ['id' => 1, 'name' => 'PHP', 'description' => 'PHP desc'],
            ['id' => 2, 'name' => 'JavaScript', 'description' => 'JS desc'],
            ['id' => 3, 'name' => 'MySQL', 'description' => 'SQL desc']
        ]);
    }
}
