<?php

namespace App\Http\Controllers\UI;

use App\Extensions\TimeTable as ExtensionsTimeTable;
use App\Http\Controllers\Controller;
use App\Models\Timetable;
use App\Http\Requests\StoreTimetableRequest;
use App\Http\Requests\UpdateTimetableRequest;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Venue;
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

    public function tables()
    {
        $timetable = new ExtensionsTimeTable();

        #$timetable->build();

        $timetable->createTables();

        #return response()->json(($timetable->timetable));
        #return response()->json(($timetable->createTables()));
    }
    public function lessons()
    {
        $timetable = new ExtensionsTimeTable();

        $timetable->lessons();

        #return response()->json(['total' => sizeof($timetable->lessons)]);
        #return response()->json(($timetable->lessons));
        #return response()->json(["id"=>$timetable->randomElement(0,$timetable->lessons)]);
        #return response()->json($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]->stream->id);
        #dd($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]);

        #return response()->json(Level::find(1)->venues);
        return response()->json(Venue::find(Subject::find(1)->venue_id));
    }
}
