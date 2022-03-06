<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Extensions\Time;

use App\Models\DaySession;
use App\Extensions\TimeTable;

use App\Extensions\Lesson;

class TimeTableSelectSessionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $timetable = new TimeTable();
        $timetable->build();
        $timetable->createTables();

        $section = '11';
        $sessions = $timetable->generateAllSessions($timetable);
    
        $lesson = new Lesson(Teacher::find(1), Subject::find(1), Venue::find(1),Level::find(1), Section::find(1));
        $session = $timetable->selectSession($section, $sessions, $lesson);

        #dd($session);
    }
}
