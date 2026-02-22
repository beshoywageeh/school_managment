<?php

namespace Database\Seeders;

use App\Models\class_room;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class class_roomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class_rooms = ['الصف الاول', 'الصف الثاني', 'الصف الثالث', 'الصف الرابع', 'الصف الخامس', 'الصف السادس'];
        $grades = Grade::get();

        foreach ($grades as $grade_id) {
            foreach ($class_rooms as $name) {
                class_room::create([
                    'name' => $name,
                    'grade_id' => $grade_id->id,
                    'user_id' => '1',
                    'slug' => \Illuminate\Support\str::slug($name),
                    'school_id' => '1',
                ]);
            }
        }
    }
}
