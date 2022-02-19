<?php

namespace App\Extensions;

use App\Models\Day;
use App\Models\DaySession;
use App\Models\Level;
use App\Models\LevelStream;
use App\Models\Stream;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Venue;

class TimeTable
{
    public $timetable;
    public $lessons;

    public function __construct()
    {
        $this->timetable = [];
        $this->lessons = [];
    }


    public function build()
    {
        $timetable = [];
        foreach (Day::with('daySession')->get() as $day)
        {
            $timetable[$day->day] = [];
    
            foreach ($day->daySession as $session)
            {
                $timetable[$day->day][(string)$session->id] = [];
            }
        }

        return $timetable;
    }

    public function lessons()
    {
            $teachers = Teacher::with(['subjects'])->get();
            foreach ($teachers as $teacher)
            {
                foreach ($teacher->subjects as $subject)
                {
                    $levels = Subject::find($subject->id) != null ? Subject::find($subject->id)->with('levels')->get(): [];
                    foreach ($levels as $level)
                    {
                        $streams = Level::find($level->id) != null? Level::find($level->id)->with('streams')->get(): [];
                        foreach ($streams as $stream)
                        {
                            $section = Stream::find($stream->id) != null? Stream::find($stream->id)->venue() : null; 
                            array_push($this->lessons,new Lesson(Teacher::find($teacher->id), $subject, $section, Level::find($level->id), Stream::find($stream->id)));
                        } 
                    } 
                } 
            }
    }


    public function createTables()
    {
        foreach (LevelStream::all() as $levelstream)
        {
            $this->timetable[(string)$levelstream->level_id . (string)$levelstream->stream_id] = $this->build();
        }
    }

    public function allocateLessons()
    {
        $tables = array_keys($this->timetable);
        $this->selectLessons($tables);
    }

    public function selectLessons($tables)
    {
        $sessionlessons = [];
        $selectedTeachers = [];
        $selectedVenues = [];


        while (sizeof($sessionlessons) != sizeof($tables))
        {
            $lesson = $this->lessons[$this->randomElement(0,$this->lessons)];

            if(!$this->checkLessons($lesson, $sessionlessons) && !$this->checkTeachers($lesson, $selectedTeachers))
            {
                if(!$this->checkVenues($lesson, $selectedVenues))
                {
                    $this->selectedLesson($sessionlessons,$lesson);
                    $this->selectedTeachers($selectedTeachers,$lesson);
                    $this->selectedVenues($selectedVenues,$lesson);
                }
                else
                {
                    $this->setVenue($lesson, $selectedVenues);
                    $this->selectedLesson($sessionlessons,$lesson);
                    $this->selectedTeachers($selectedTeachers,$lesson);
                    $this->selectedVenues($selectedVenues,$lesson);
                }
            }
        }
    }


    public function randomElement($min,$space)
    {
        return rand($min, sizeof($space));
    }

    /**-- Check if Lesson is already selected --**/
    public function checkLessons($lesson, $sessionlessons)
    {
        return array_key_exists($this->lessonKey($lesson), $sessionlessons) && is_object($sessionlessons[$this->lessonKey($lesson)]);
    }

    /**-- Check if Teacher is available to teach --**/
    public function checkTeachers($lesson, $selectedTeachers)
    {
        return in_array($this->teacher($lesson),$selectedTeachers);
    }

    /**-- Check if venue is available for use --**/
    public function checkVenues($lesson, $selectedVenues)
    {
        return in_array($this->venue($lesson), $selectedVenues);
    }

    /**-- add lesson to session lessons --**/
    public function selectedLesson(&$sessionlessons, Lesson $lesson)
    {
        array_push($sessionlessons, $lesson);
    }

    /**-- add teacher of selected lesson to selectedTeachers --**/
    public function selectedTeachers(&$selectedTeachers, Lesson $lesson)
    {
        array_push($selectedTeachers, $this->teacher($lesson));
    }

    /**-- add venue of selected lesson to selectedVenues --**/
    public function selectedVenues(&$selectedVenues, Lesson $lesson)
    {
        array_push($selectedVenues, $this->venue($lesson));
    }

    /**-- generate unique table lesson key(level+stream id)--**/
    public function lessonKey(Lesson $lesson)
    {
        return (string)$lesson->level->id . (string)$lesson->stream->id; 
    }

    /**-- return unique teacher key--**/
    public function teacher(Lesson $lesson)
    {
        return $lesson->teacher->id; 
    }

    /**-- return unique venue key--**/
    public function venue(Lesson $lesson)
    {
        if($lesson->venue != null)
           return $lesson->venue->id; 
    }

    /**-- return subject key--**/
    public function subject(Lesson $lesson)
    {
        return $lesson->subject->id; 
    }

    /**-- return stream key--**/
    public function stream(Lesson $lesson)
    {
        return $lesson->stream->id; 
    }

    /**-- return level key--**/
    public function level(Lesson $lesson)
    {
        return $lesson->level->id; 
    }

    /**-- return unique venue key--**/
    public function setVenue(Lesson $lesson, $selectedVenues)
    {
        return $lesson->venue->id = $this->locateVenue($lesson, $selectedVenues); 
    }

    /**-- return available venue--**/
    public function locateVenue(Lesson $lesson, $selectedVenues)
    {
        $subjectVenues = Venue::find(Subject::find($this->subject($lesson))->venue_id) != null? Venue::find(Subject::find($this->subject($lesson))->venue_id): [];
        $streamVenues = Stream::find($this->stream($lesson))->venues != null? Stream::find($this->stream($lesson))->venues(): [];
        $levelVenues = Level::find($this->level($lesson))->venues != null? Level::find($this->level($lesson))->venues(): [];
        
        $subjectVenue = $this->findVenue($subjectVenues, $selectedVenues);

        if($subjectVenue != null)
            return $subjectVenue;

        $streamVenue = $this->findVenue($streamVenues, $selectedVenues);

        if($streamVenue != null)
            return $streamVenue; 

        $levelVenue = $this->findVenue($levelVenues, $selectedVenues);

        if($levelVenue != null)
            return $levelVenue;
    }

    /**-- return available venue--**/
    public function findVenue($venues, $selectedVenues)
    {
        foreach ($venues as $venue)
        {
            if(!in_array($venue->id, $selectedVenues))
            {
                return $venue->id;
            }
              
        }
    }

}