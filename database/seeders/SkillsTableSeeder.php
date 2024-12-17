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
        DB::table('skills')->insert([
            [
                'user_id' => 2,
                'name' => 'Laravel',
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'user_id' => 2,
                'name' => 'Ruby',
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'user_id' => 3,
                'name' => 'Laravel',
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
        ]);
    }
}
