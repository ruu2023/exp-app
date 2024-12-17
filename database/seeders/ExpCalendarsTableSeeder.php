<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpCalendarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exp_calendars')->insert([
            [
                'skill_id' => 1,
                'exp' => 200,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'skill_id' => 1,
                'exp' => 400,
                'created_at' => "2024-12-08",
                'updated_at' => "2024-12-08"
            ],
            [
                'skill_id' => 2,
                'exp' => 200,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
            [
                'skill_id' => 3,
                'exp' => 200,
                'created_at' => "2024-12-09",
                'updated_at' => "2024-12-09"
            ],
        ]);
    }
}
