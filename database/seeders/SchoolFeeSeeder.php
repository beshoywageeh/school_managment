<?php

namespace Database\Seeders;

use App\Models\school_fee;
use Illuminate\Database\Seeder;

class SchoolFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        school_fee::factory(12)->create();
    }
}
