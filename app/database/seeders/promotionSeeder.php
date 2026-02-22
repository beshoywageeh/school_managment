<?php

namespace Database\Seeders;

use App\Models\promotion;
use Illuminate\Database\Seeder;

class promotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        promotion::factory(30000)->create();
    }
}
