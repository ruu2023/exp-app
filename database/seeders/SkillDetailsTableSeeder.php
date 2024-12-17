<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skill_details')->insert([
            [
                'skill_id' => 1,
                'level' => 4,
                'exp' => 1000,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'skill_id' => 2,
                'level' => 5,
                'exp' => 300,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'skill_id' => 3,
                'level' => 2,
                'exp' => 3000,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
        ]);
    }
}
