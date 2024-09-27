<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Seeder;

class settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        settings::factory(5)->create();
    }
}
