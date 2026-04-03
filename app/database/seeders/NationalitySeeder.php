<?php

namespace Database\Seeders;

use App\Models\nationality;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('nationalities')->delete();

        $nationals = ['مصري'
           ];

        foreach ($nationals as $name) {
            nationality::create(['name' => $name]);
        }
    }
}
