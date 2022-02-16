<?php

namespace Database\Seeders;

use App\Models\DaySession;
use Illuminate\Database\Seeder;

class DaySessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DaySession::truncate();

        DaySession::create([
            'session' => 'Morning',
            'day_id' => 1,
            'start' => '7:30am',
            'end' => '9:50am',
        ]);
    
        DaySession::create([
            'session' => 'Short Break',
            'day_id' => 1,
            'start' => '9:50am',
            'end' => '10:00am',
        ]);

        DaySession::create([
            'session' => 'Mid-Morning',
            'day_id' => 1,
            'start' => '10:00am',
            'end' => '11:20am',
        ]);

        DaySession::create([
            'session' => 'Long Break',
            'day_id' => 1,
            'start' => '11:20am',
            'end' => '11:40am',
        ]);

        DaySession::create([
            'session' => 'Before Lunch',
            'day_id' => 1,
            'start' => '11:40am',
            'end' => '1:00pm',
        ]);

        DaySession::create([
            'session' => 'Lunch',
            'day_id' => 1,
            'start' => '1:00pm',
            'end' => '2:00pm',
        ]);

        DaySession::create([
            'session' => 'Afternoon',
            'day_id' => 1,
            'start' => '2:00pm',
            'end' => '4:00pm',
        ]);

        DaySession::create([
            'session' => 'Games',
            'day_id' => 1,
            'start' => '4:00pm',
            'end' => '5:00pm',
        ]);
    }
}
