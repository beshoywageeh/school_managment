<?php

namespace Database\Seeders;

use App\Models\StudentAccount;
use Illuminate\Database\Seeder;

class StudentAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentAccount::factory(600)->create();
    }
}
