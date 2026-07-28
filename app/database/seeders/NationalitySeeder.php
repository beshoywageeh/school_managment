<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('nationalities')->delete();

        $nationals = ['مصري',
        ];

        foreach ($nationals as $name) {
            Nationality::create(['name' => $name]);
        }
    }
}
