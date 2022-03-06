<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Extensions\TimeTable;

class TimeTableTest extends TestCase
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
        $timetable->lessons();

        # print_r($timetable->timetable);
        print_r($timetable->lessons);
    }
}
