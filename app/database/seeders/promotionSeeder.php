<?php

namespace Database\Seeders;

use App\Models\promotion;
use Illuminate\Database\Seeder;

class promotionSeeder extends Seeder
{
    public function run(): void
    {
        $factory = promotion::factory();

        for ($i = 0; $i < 6; $i++) {
            $records = [];
            for ($j = 0; $j < 50; $j++) {
                $records[] = $factory->make()->getAttributes();
            }
            promotion::insert($records);
            unset($records);
        }
    }
}
