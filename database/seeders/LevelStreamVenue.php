<?php

namespace Database\Seeders;

use App\Models\LevelStream;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class LevelStreamVenue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= sizeof(LevelStream::all());)
        {
            for($j = 1;$j <=  sizeof(Venue::all());$j++)
            {
                LevelStream::find($i)->venue()->attach($j);
                $i++;
            }
        }
    }
}
