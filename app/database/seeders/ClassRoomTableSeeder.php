<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class ClassRoomTableSeeder extends Seeder
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
                ClassRoom::create([
                    'name' => $name,
                    'grade_id' => $grade_id->id,
                    'user_id' => '1',
                    'slug' => str::slug($name),
                    'school_id' => '1',
                ]);
            }
        }
    }
}
