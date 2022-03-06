<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\SubjectTeacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_teacher')->truncate();
        DB::table('department_subject')->truncate();
        Subject::truncate();

        Subject::create([
            'subject' => 'Mathematics',
            'duration' => 40,
            'lessons' => 0,
        ]);


        Subject::create([
            'subject' => 'Chemistry',
            'duration' => 40,
            'lessons' => 0,
            
        ]);

        Subject::create([
            'subject' => 'Physics',
            'duration' => 40,
            'lessons' => 0,
            
        ]);

        Subject::create([
            'subject' => 'Computer Studies',
            'duration' => 40,
            'lessons' => 0,
            
        ]);

        Subject::create([
            'subject' => 'Biology',
            'duration' => 40,
            'lessons' => 0,
        ]);

        Subject::create([
            'subject' => 'Geography',
            'duration' => 40,
            'lessons' => 0,
            
        ]);

        Subject::create([
            'subject' => 'Psychology',
            'duration' => 40,
            'lessons' => 0,
            
        ]);

        Subject::create([
            'subject' => 'Music',
            'duration' => 40,
            'lessons' => 0,
    
        ]);

        for($i = 1; $i < sizeof(Subject::all());)
        {
            for($j = 1; $j <= sizeof(Teacher::all()); $j++)
            {
                Subject::find($i)->teachers()->attach(Teacher::find($j));
                $i++;
            }
        }

        for($j = 1; $j <= sizeof(Subject::all()); $j++)
        {
            Subject::find($j)->department()->attach(Department::all()->random());
        }

        for($j = 1; $j <= sizeof(Subject::all()); $j++)
        {
            Subject::find($j)->levels()->attach(Level::all());
        }
    }
}
