<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();

        Department::create([
            'department' => 'Mathematics'
        ]);

        Department::create([
            'department' => 'Science'
        ]);

        Department::create([
            'department' => 'Humanities'
        ]);

        Department::create([
            'department' => 'Psychology'
        ]);

        Department::create([
            'department' => 'Applied'
        ]);
    }
}
