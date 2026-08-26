<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\School;
use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::factory()->count(4)->create([
            'school_id' => School::query()->min('id'),
        ]);
    }
}
