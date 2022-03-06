<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Extensions\Time;

class TimeMinutesIntervalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $time = new Time();
        $response = $time->minutesInterval('04:00 pm', '05:30 pm');

        echo($response);
    }
}
