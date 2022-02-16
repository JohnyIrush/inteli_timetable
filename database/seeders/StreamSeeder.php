<?php

namespace Database\Seeders;

use App\Models\Stream;
use Illuminate\Database\Seeder;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stream::truncate();

        Stream::create([
            'stream' => 'Purple',
            'level_id' => 1,
            'venue_id' => 1
        ]);

        Stream::create([
            'stream' => 'Pink',
            'level_id' => 1,
            'venue_id' => 1
        ]);

        Stream::create([
            'stream' => 'Violet',
            'level_id' => 1,
            'venue_id' => 1
        ]);

    }
}
