<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class promotionSeeder extends Seeder
{
    public function run(): void
    {
        $factory = Promotion::factory();

        for ($i = 0; $i < 6; $i++) {
            $records = [];
            for ($j = 0; $j < 50; $j++) {
                $records[] = $factory->make()->getAttributes();
            }
            Promotion::insert($records);
            unset($records);
        }
    }
}
