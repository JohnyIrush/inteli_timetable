<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::truncate();

        Teacher::create([
            'teacher' => 'Mathematics',
            'level_id' => 2,
            'department_id' => 1,
            'subject_id' => 1,
        ]);


        Teacher::create([
            'teacher' => 'Chemistry',
            'level_id' => 2,
            'department_id' => 2,
            'subject_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Physics',
            'level_id' => 2,
            'department_id' => 2,
            'subject_id' => 3,
        ]);

        Teacher::create([
            'teacher' => 'Computer Studies',
            'level_id' => 2,
            'department_id' => 3,
            'subject_id' => 4,
        ]);

        Teacher::create([
            'teacher' => 'Biology',
            'level_id' => 2,
            'department_id' => 2,
            'subject_id' => 5,
        ]);

        Teacher::create([
            'teacher' => 'Geography',
            'level_id' => 2,
            'department_id' => 4,
            'subject_id' => 6,
        ]);

        Teacher::create([
            'teacher' => 'Psychology',
            'level_id' => 2,
            'department_id' => 2,
            'subject_id' => 7,
        ]);

        Teacher::create([
            'teacher' => 'Music',
            'level_id' => 2,
            'department_id' => 5,
            'subject_id' => 8,
        ]);
    }
}
