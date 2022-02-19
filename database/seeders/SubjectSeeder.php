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
            'venue_id' => null,
            'duration' => 40,
            'lessons' => 0
        ]);


        Subject::create([
            'subject' => 'Chemistry',
            'venue_id' => 5,
            'duration' => 40,
            'lessons' => 0
            
        ]);

        Subject::create([
            'subject' => 'Physics',
            'venue_id' => 6,
            'duration' => 40,
            'lessons' => 0
            
        ]);

        Subject::create([
            'subject' => 'Computer Studies',
            'venue_id' => 9,
            'duration' => 40,
            'lessons' => 0
            
        ]);

        Subject::create([
            'subject' => 'Biology',
            'venue_id' => 7,
            'duration' => 40,
            'lessons' => 0
        ]);

        Subject::create([
            'subject' => 'Geography',
            'venue_id' => null,
            'duration' => 40,
            'lessons' => 0
            
        ]);

        Subject::create([
            'subject' => 'Psychology',
            'venue_id' => null,
            'duration' => 40,
            'lessons' => 0
            
        ]);

        Subject::create([
            'subject' => 'Music',
            'venue_id' => 10,
            'duration' => 40,
            'lessons' => 0
        ,
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
