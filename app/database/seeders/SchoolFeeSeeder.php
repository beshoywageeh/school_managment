<?php

namespace Database\Seeders;

use App\Models\School_Fee;
use Illuminate\Database\Seeder;

class SchoolFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School_Fee::factory(50)->create();
    }
}
