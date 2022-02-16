<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::truncate();

        Subject::create([
            'subject' => 'Mathematics',
            'teacher_id' => 1,
            'level_id' => 1,
            'department_id' => 1,
        ]);


        Subject::create([
            'subject' => 'Chemistry',
            'teacher_id' => 2,
            'level_id' => 3,
            'department_id' => 2,
        ]);

        Subject::create([
            'subject' => 'Physics',
            'teacher_id' => 3,
            'level_id' => 1,
            'department_id' => 2,
        ]);

        Subject::create([
            'subject' => 'Computer Studies',
            'teacher_id' => 4,
            'level_id' => 4,
            'department_id' => 3,
        ]);

        Subject::create([
            'subject' => 'Biology',
            'teacher_id' => 5,
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Subject::create([
            'subject' => 'Geography',
            'teacher_id' => 6,
            'level_id' => 1,
            'department_id' => 4,
        ]);

        Subject::create([
            'subject' => 'Psychology',
            'teacher_id' => 7,
            'level_id' => 3,
            'department_id' => 2,
        ]);

        Subject::create([
            'subject' => 'Music',
            'teacher_id' => 8,
            'level_id' => 1,
            'department_id' => 5,
        ]);
    }
}
