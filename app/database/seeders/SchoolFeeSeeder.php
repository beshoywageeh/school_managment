<?php

namespace Database\Seeders;

use App\Models\SchoolFee;
use Illuminate\Database\Seeder;

class SchoolFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchoolFee::factory(50)->create();
    }
}
