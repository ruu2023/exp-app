<?php

namespace Database\Seeders;

use App\Http\Controllers\ExpCalendarController;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SkillsTableSeeder::class);
        $this->call(SkillDetailsTableSeeder::class);
        $this->call(ExpCalendarsTableSeeder::class);
    }
}
