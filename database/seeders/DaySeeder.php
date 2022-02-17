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
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Monday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Tuesday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Wednesday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Thursday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);

        Day::create([
            'day' => 'Friday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);


        Day::create([
            'day' => 'Saturday',
            'start' => '7:30am',
            'end' => '4:00pm',
        ]);
    }
}
