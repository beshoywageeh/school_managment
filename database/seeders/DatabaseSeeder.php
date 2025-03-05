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

        $this->call([settingsTableSeeder::class,
            PermissionTableSeeder::class,
            NationalitySeeder::class,
            UserTableSeeder::class,
            AcadmiceYearSeeder::class,
            //My_parentsTableSeeder::class,
            GradeTableSeeder::class,
            class_roomTableSeeder::class,
            //StudentsTableSeeder::class,
            // AcadmiceYearSeeder::class,
            // SchoolFeeSeeder::class,
            // FeeinvSeeder::class,
            // ExceptionSeeder::class,
            // RecipetPaymentSeeder::class,
            // StudentAccountSeeder::class,
        ]);

    }
}
