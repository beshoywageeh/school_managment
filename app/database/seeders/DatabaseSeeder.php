<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SchoolTableSeeder::class,
            PermissionTableSeeder::class,
            NationalitySeeder::class,
            UserTableSeeder::class,
            AcademicYearSeeder::class,
            MyParentTableSeeder::class,
            GradeTableSeeder::class,
            ClassRoomTableSeeder::class,
            StudentsTableSeeder::class,
            SchoolFeeSeeder::class,
            FeeinvSeeder::class,
            ExceptionSeeder::class,
            RecipetPaymentSeeder::class,
            StudentAccountSeeder::class,
            JobsSeeder::class,
            ImageTableSeeder::class,
            promotionSeeder::class,
        ]);
    }
}
