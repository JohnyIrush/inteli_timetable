<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\DaySession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('day_day_session')->truncate();

        DaySession::create([
            'session' => 'Morning',
            'start' => '7:30am',
            'end' => '9:50am',
        ]);
    
        DaySession::create([
            'session' => 'Short Break',
            'start' => '9:50am',
            'end' => '10:00am',
        ]);

        DaySession::create([
            'session' => 'Mid-Morning',
            'start' => '10:00am',
            'end' => '11:20am',
        ]);

        DaySession::create([
            'session' => 'Long Break',
            'start' => '11:20am',
            'end' => '11:40am',
        ]);

        DaySession::create([
            'session' => 'Before Lunch',
            'start' => '11:40am',
            'end' => '1:00pm',
        ]);

        DaySession::create([
            'session' => 'Lunch',
            'start' => '1:00pm',
            'end' => '2:00pm',
        ]);

        DaySession::create([
            'session' => 'Afternoon',
            'start' => '2:00pm',
            'end' => '4:00pm',
        ]);

        DaySession::create([
            'session' => 'Games',
            'start' => '4:00pm',
            'end' => '5:00pm',
        ]);


        foreach (DaySession::all() as $session)
        {
            $session->day()->attach(Day::all());
        }
    }
}
