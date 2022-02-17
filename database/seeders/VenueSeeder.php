<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venue::truncate();

        Venue::create([
            'venue' => 'Form One Room',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Form Two Room',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Form Three Room',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Form Four Room',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Chemistry Lab',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Physics Lab',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Biology Lab',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Multi-Purpose Hall',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Computer Lab',
            'location' => (string)rand(500000,10000000),
        ]);

        Venue::create([
            'venue' => 'Music Lab',
            'location' => (string)rand(500000,10000000),
        ]);

        foreach(Level::all() as $level)
        {
            $level->venues()->attach(Venue::inRandomOrder()->take(rand(1,3))->pluck('id'));
        }
    }
}
