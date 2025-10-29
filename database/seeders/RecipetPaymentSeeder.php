<?php

namespace Database\Seeders;

use App\Models\Recipt_Payment;
use Illuminate\Database\Seeder;

class RecipetPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipt_Payment::factory(400)->create();
    }
}
