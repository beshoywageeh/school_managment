<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ExcptionFees::factory(100)->create();
    }
}
