<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [VenueSeeder::class,
            LevelSeeder::class,
            StreamSeeder::class,
            TeacherSeeder::class,
            DepartmentSeeder::class,
            SubjectSeeder::class,
            VenueSeeder::class,
            DaySeeder::class,
            DaySessionSeeder::class,
            SectionSeeder::class,
            ]
        );
    }
}
