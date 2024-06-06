<?php

namespace Database\Seeders;

use App\Models\Fee_invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeinvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fee_invoice::factory(100)->create();
    }
}
