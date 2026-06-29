<?php

namespace Database\Seeders;

use App\Models\FeeInvoice;
use Illuminate\Database\Seeder;

class FeeinvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeeInvoice::factory(100)->create();
    }
}
