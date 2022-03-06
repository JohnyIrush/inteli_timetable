<?php

namespace Database\Seeders;

use App\Models\Level;
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
        ]);

        Stream::create([
            'stream' => 'Pink',        
        ]);


    }

}
