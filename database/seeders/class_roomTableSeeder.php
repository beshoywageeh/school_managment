<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class class_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\class_room::factory()->count(24)->create();
    }
}