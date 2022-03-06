<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Section::truncate();

        //Level 1
        Section::create([
            'level_id' =>  1,
            'stream_id' => 1,        
        ]);

        Section::create([
            'level_id' => 1,
            'stream_id' => 2,        
        ]);

        //Level 2
        Section::create([
            'level_id' => 2,
            'stream_id' => 1,        
        ]);
    
        Section::create([
            'level_id' => 2,
            'stream_id' => 2,
       
        ]);

        //Level 3
        Section::create([
            'level_id' => 3,
            'stream_id' => 1,        
        ]);

        Section::create([
            'level_id' => 3,
            'stream_id' => 2,     
        ]);

        //Level 4
        Section::create([
            'level_id' => 4,
            'stream_id' => 1,        
        ]);

        Section::create([
            'level_id' => 4,
            'stream_id' => 2,        
        ]);

    }
}
