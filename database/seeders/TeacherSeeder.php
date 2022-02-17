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
            'teacher' => 'Chepkuon',
            'level_id' => 2,
            'department_id' => 1,
        ]);


        Teacher::create([
            'teacher' => 'Walter White',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Laurence Krauss',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Abdul Bari',
            'level_id' => 2,
            'department_id' => 3,
        ]);

        Teacher::create([
            'teacher' => 'Richard Dawkins',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Neil deGrasse ',
            'level_id' => 2,
            'department_id' => 4,
        ]);

        Teacher::create([
            'teacher' => 'Dr. Paul Dobransky',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Eminem',
            'level_id' => 2,
            'department_id' => 5,
        ]);
    }
}
