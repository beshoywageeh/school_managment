<?php

namespace Database\Seeders;

use App\Models\ExcptionFees;
use Illuminate\Database\Seeder;

class ExceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExcptionFees::factory(100)->create();
    }
}
