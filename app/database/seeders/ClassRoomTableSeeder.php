<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClassRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class_rooms = ['الصف الاول', 'الصف الثاني', 'الصف الثالث', 'الصف الرابع', 'الصف الخامس', 'الصف السادس'];
        $grades = Grade::query()->get();
        $schoolId = School::query()->min('id');

        foreach ($grades as $grade) {
            foreach ($class_rooms as $name) {
                ClassRoom::create([
                    'name' => $name,
                    'grade_id' => $grade->id,
                    'user_id' => '1',
                    'slug' => Str::slug($name),
                    'school_id' => $schoolId,
                ]);
            }
        }
    }
}
