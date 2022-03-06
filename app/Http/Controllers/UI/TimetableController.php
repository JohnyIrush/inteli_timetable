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

        $timetable->build(); /*Returns sessions*/

        #return response()->json($timetable->build());

        $timetable->createTables(); //return nothing

        $timetable->lessons();
        $timetable->allocateLessons();
        #$timetable->subjectLessonLimit();

        return response()->json(($timetable->timetable));
        #return response()->json(sizeof($timetable->timetable));

        #$data = $timetable->timetable['11']['Sunday']['1'];
        #return response()->json($data);


        #return response()->json($timetable->checkSubjectLessonLimit($timetable->lessons[1]));
        return response()->json(($timetable->subject_lessons_limit));
    }

    public function sessions()
    {
        $timetable = new ExtensionsTimeTable();
        $timetable->build();

        $timetable->createTables();
        $timetable->lessons();
        #return response()->json($timetable->timetable);
        $timetable->generateAllSessions($timetable->timetable, $timetable->section_total_lessons);
        return response()->json($timetable->section_total_lessons);
        $timetable->allocateLessons();
        return response()->json($timetable->sessions);
        #return response()->json(sizeof($timetable->sessions));
        #return response()->json($timetable->sessionsDurations);
        return response()->json($timetable->timetable);
        #return response()->json($timetable->allocateLessons());
        return response()->json(sizeof($timetable->allocateLessons()));
    }

    public function lessons()
    {
        $timetable = new ExtensionsTimeTable();
        $timetable->build();

        $timetable->createTables();
        $timetable->lessons();

        $timetable->generateAllSessions($timetable->timetable, $timetable->section_total_lessons);
        #return response()->json(['total' => sizeof($timetable->lessons)]);
        #return response()->json(($timetable->lessons));
        #return response()->json(["id"=>$timetable->randomElement(0,$timetable->lessons)]);
        #return response()->json($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]->stream->id);
        #dd($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]);
         
        #return response()->json(Level::find(1)->venues);
        #return response()->json(Venue::find(Subject::find(1)->venue_id));
        #return response()->json($timetable->allocateLessons());
        #return response()->json(sizeof($timetable->allocateLessons()));
        #return response()->json(sizeof($timetable->selectLessons(array_keys($timetable->timetable))));
        #return response()->json(($timetable->selectLessons(($timetable->timetable))));

        return response()->json($timetable->subjectLessonLimit());
        
    }


    public function selectedVenues()
    {
        $timetable = new ExtensionsTimeTable();
        $timetable->build();

        $timetable->createTables();
        $timetable->lessons();

        #return response()->json(['total' => sizeof($timetable->lessons)]);
        #return response()->json(($timetable->lessons));
        #return response()->json(["id"=>$timetable->randomElement(0,$timetable->lessons)]);
        #return response()->json($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]->stream->id);
        #dd($timetable->lessons[$timetable->randomElement(0,$timetable->lessons)]);

        #return response()->json(Level::find(1)->venues);
        #return response()->json(Venue::find(Subject::find(1)->venue_id));
        #return response()->json($timetable->allocateLessons());
        #return response()->json(sizeof($timetable->allocateLessons()));
        #return response()->json(sizeof($timetable->selectLessons(array_keys($timetable->timetable))));
        #return response()->json(($timetable->selectLessons(($timetable->timetable))));
        #return response()->json(($timetable->selectLessons(($timetable->timetable))));
        $timetable->selectLessons(($timetable->timetable));
        return response()->json($timetable->selectedVenues);
    }

    public function tests()
    {
        $data = Level::find(1)->venues;
        $data = Level::find(1)->sections;
        $data = Subject::find(8)->venue;
        return response()->json($data, 200);
    }

}
