<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Timetable;
use App\Http\Requests\StoreTimetableRequest;
use App\Http\Requests\UpdateTimetableRequest;
use Inertia\Inertia;

class TimetableController extends Controller
{
    /**
     * Render Timetable and 
     * Schedule Interface
     */
    public function timetable()
    {
        return Inertia::render('Timetable/windows/Timetable');
    }
}
