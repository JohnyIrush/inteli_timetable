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

class TimetableLocateVenueTest extends TestCase
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


        $selectedVenues = [
            11,
            13,
            12,
            14,
            9,
            10,
        ];
    
        $lesson = new Lesson(Teacher::find(1), Subject::find(1), Venue::find(1),Level::find(1), Stream::find(1));
        $venue = $timetable->locateVenue($lesson, $selectedVenues);
        print_r($venue);
    }
}
