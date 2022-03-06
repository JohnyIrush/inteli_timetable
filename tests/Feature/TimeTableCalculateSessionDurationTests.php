<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Extensions\Time;

use App\Models\DaySession;
use App\Extensions\TimeTable;

class TimeTableCalculateSessionDurationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        $timetable = new TimeTable();

        $daysession = DaySession::find(1);
        $time = new Time();

        $duration = $timetable->calculateSessionDuration($daysession,$time);

        echo ($duration);
    }
}
