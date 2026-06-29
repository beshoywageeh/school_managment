<?php

namespace Database\Seeders;

use App\Models\ExceptionFees;
use Illuminate\Database\Seeder;

class ExceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExceptionFees::factory(100)->create();
    }
}
