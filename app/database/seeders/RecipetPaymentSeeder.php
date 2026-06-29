<?php

namespace Database\Seeders;

use App\Models\ReceiptPayment;
use Illuminate\Database\Seeder;

class RecipetPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReceiptPayment::factory(400)->create();
    }
}
