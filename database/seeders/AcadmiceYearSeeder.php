<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AcadmiceYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\acadmice_year::factory()->count(3)->create();
    }
}
