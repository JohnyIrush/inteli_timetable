<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Level::truncate();

        Level::create([
            'level' => 'Form One',
            'venue_id' => 1,
            'teacher_id' => 1  
        ]);

        Level::create([
            'level' => 'Form Two',
            'venue_id' => 2,
            'teacher_id' => 1  
        ]);

        Level::create([
            'level' => 'Form Three',
            'venue_id' => 3,
            'teacher_id' => 1  
        ]);

        Level::create([
            'level' => 'Form Four',
            'venue_id' => 4,
            'teacher_id' => 1  
        ]);

    }
}
