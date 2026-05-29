<?php

namespace Database\Seeders;

use App\Models\acadmice_year;
use Illuminate\Database\Seeder;

class AcadmiceYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        acadmice_year::factory()->count(3)->create();
    }
}
