<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Extensions\TimeTable;

use App\Extensions\Lesson;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Venue;
use App\Models\Level;
use App\Models\Stream;

class DaySessionTest extends TestCase
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
        $sectionkey = '11';
        $sessionkey = '11Sanday1';
        dd($timetable->sessions);
        $timetable->generateAllSessions($timetable->timetable);
        $daysession = $timetable->daySession($sectionkey, $sessionkey);

        dd($daysession);

    }
}
