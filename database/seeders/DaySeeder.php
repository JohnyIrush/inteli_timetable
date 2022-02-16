<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::truncate();

        Day::create([
            'day' => 'Sunday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Monday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Tuesday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Wednesday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Thursday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Friday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);


        Day::create([
            'day' => 'Saturday',
            'day_session_id' => 0,
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);
    }
}
