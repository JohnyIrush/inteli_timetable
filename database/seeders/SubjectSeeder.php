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
            'subject' => 'Mathematics'
        ]);


        Subject::create([
            'subject' => 'Chemistry'
            
        ]);

        Subject::create([
            'subject' => 'Physics'
            
        ]);

        Subject::create([
            'subject' => 'Computer Studies'
            
        ]);

        Subject::create([
            'subject' => 'Biology'
            
        ]);

        Subject::create([
            'subject' => 'Geography'
            
        ]);

        Subject::create([
            'subject' => 'Psychology'
            
        ]);

        Subject::create([
            'subject' => 'Music'
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
