<?php

namespace Database\Seeders;

use App\Models\MyParent;
use Illuminate\Database\Seeder;

class MyParentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyParent::factory(500)->create();
    }
}
