<?php

namespace Database\Seeders;

use App\Models\My_parents;
use Illuminate\Database\Seeder;

class My_parentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        My_parents::factory(200)->create();
    }
}
