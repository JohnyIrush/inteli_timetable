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
use App\Models\Section;

class TimeTable
{
    public $timetable;
    public $lessons;
    public $sessions;
    public $sessionsDurations;
    public $time;
    public $selectedVenues;
    public $sections;
    public $section_total_lessons;
    public $subject_lessons_limit;


    public function __construct()
    {
        $this->timetable = [];
        $this->lessons = [];
        $this->sessions = [];
        $this->sections = [];
        $this->sessionsDurations = [];
        $this->time = new Time();
        $this->selectedVenues = [];
        $this->section_total_lessons = [];
        $this->subject_lessons_limit = [];
    }


    /*Create Sessions*/
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

    /*Insert Sessions for each sections,  Create an empty Timetable without lessons*/
    public function createTables()
    {
        foreach (Section::all() as $key => $section)
        {
            $sectionkey = (string)$section->level_id . (string)$section->stream_id;
            $this->sections[$sectionkey] = ['section' => $key,'level' => $section->level_id, 'stream' => $section->stream_id]; //Track what stream and level a section is composed of
            $this->timetable[$sectionkey] = $this->build();
            $this->section_total_lessons[$sectionkey] = 0;
            $this->subject_lessons_limit[$sectionkey] = [];
        }
    }

    /**
     * lessons functions generates
     * all possible lessons by each teachers
     * Creates an array of all possible Lessons
     * A Lesson is an object that has 
     * (Teacher, Subject, Venue, Level, Stream)
     **/

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
                        $streams = Level::find($level->id) != null? Level::find($level->id)->sections: [];
                        foreach ($streams as $stream)
                        {
                            $venue = Subject::find($subject->id) != null? Subject::find($subject->id)->venue : 0; 
                            array_push($this->lessons,new Lesson(Teacher::find($teacher->id), $subject, $venue, Level::find($level->id), Stream::find($stream->stream_id)));
                        } 
                    } 
                } 
            }
    }

    /**
     * Allocate/Insert Lessons into 
     * Respective Sessions Timetable
    */
    public function allocateLessons()
    {
        
        $this->generateAllSessions($this->timetable, $this->section_total_lessons);
        $this->subject_lessons_limit = $this->subjectLessonLimit();

        while(sizeof($this->sessionsDurations))
        {
            $lessons = $this->selectLessons(array_keys($this->timetable),  $this->subject_lessons_limit);
            foreach ($lessons as $lesson)
            {
                $this->insertLesson($lesson, $this->timetable, $this->selectSession($this->section($lesson), $this->sessions,$lesson));
            }
        }
    }

    /** 
     * Generate All Timetable Sessions 
     * We are using hashing techniques
     **/

    public function generateAllSessions($timetable, &$section_total_lessons)
    {
        $session = '';

        foreach ($timetable as $key => $sectiontable)
        {
            $section = $key;

            $sectionday = $sectiontable;

            foreach ($sectionday as $key => $sessions)
            {
                $day = $key;
                foreach ($sessions as $key => $daysession)
                {
                      $session .=  $section . $day . $key; 
                      $sessiondata = ['session' => $session, 'day' => $day, 'daysession' => $key, 'section' => $section];
                      $this->sessions[$section][$session] = [];
                      array_push($this->sessions[$section][$session], $sessiondata);
                      $sessionDuration = $this->calculateSessionDuration(DaySession::find($key));
                      $this->sessionsDurations[$session] = $sessionDuration;

                      if($this->checkSessionType(DaySession::find($key)))
                         $section_total_lessons[$section] += $sessionDuration/40;
                      $session = '';
                }

            }

        }
    }


    /** Insert Lessons Into Table into respective sessions **/
    public function insertLesson(Lesson $lesson, &$timetable, $session)
    {
        if(array_key_exists($session, $this->sessions[$this->section($lesson)]))
        {
         $key = $this->sessions[$this->section($lesson)][$session];
         array_push($timetable[$key[0]['section']][$key[0]['day']][$key[0]['daysession']], $lesson);
        }
    }

    /**
     * Randomly select 8 uniquei lessons
     * unique lesson is a lesson from different
     * teacher and different venue
     **/
    public function selectLessons($tables,  &$subject_lessons_limit)
    {
        $sessionlessons = [];
        $selectedTeachers = [];
        $selectedVenues = [];
        $selectedSections = [];


        while (sizeof($sessionlessons) != sizeof($tables))
        {
            $lesson = $this->lessons[$this->randomElement(0,$this->lessons)];

            if(!$this->checkLessons($lesson, $sessionlessons) && !$this->checkTeachers($lesson, $selectedTeachers) && !$this->checkSections($lesson, $selectedSections) /*&& $this->checkSubjectLessonLimit($lesson)*/)
            {
                if(!$this->checkVenues($lesson, $selectedVenues))
                {
                    $this->setVenue($lesson, $selectedVenues);
                    $this->selectedLesson($sessionlessons,$lesson);
                    $this->selectedTeachers($selectedTeachers,$lesson);
                    $this->selectedVenues($selectedVenues,$lesson);
                    $this->selectedSections($selectedSections, $lesson);
                    $this->reduceSubjectLessonLimit($lesson);
                }
                else
                {
                    $this->setVenue($lesson, $selectedVenues);
                    $this->selectedLesson($sessionlessons,$lesson);
                    $this->selectedTeachers($selectedTeachers,$lesson);
                    $this->selectedVenues($selectedVenues,$lesson);
                    $this->selectedSections($selectedSections, $lesson);
                    $this->reduceSubjectLessonLimit($lesson);
                }
            }
        }
        $this->selectedVenues = $selectedVenues;
        return $sessionlessons;
    }


    public function randomElement($min,$space)
    {
        return rand($min, sizeof($space) - 1);
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
        return $this->venue($lesson) != null && in_array($this->venue($lesson), $selectedVenues);
    }

    /**-- Check if section is already selected --**/
    public function checkSections(Lesson $lesson, $selectedSections)
    {
        return in_array($this->section($lesson), $selectedSections);
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

    /**-- add Sections of selected lesson to selectedSections --**/
    public function selectedSections(&$selectedSections, Lesson $lesson)
    {
        array_push($selectedSections, $this->section($lesson));
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

    /**-- return section key--**/
    public function section(Lesson $lesson)
    {
        return (string)$lesson->level->id . (string)$lesson->stream->id; 
    }

    /**-- return day session key--**/
    public function session(String $key, Lesson $lesson)
    {
        $id = $this->sessions[$this->section($lesson)][$key][0]['daysession'];
        $session = DaySession::find($id);
        return $session; 
    }

    /**-- return day session key--**/
    public function daySession(String $sectionkey, String $key)
    {
        $id = $this->sessions[$sectionkey][$key][0]['daysession'];
        $session = DaySession::find($id);
        return $session; 
    }

    /**-- return unique venue key--**/
    public function setVenue(Lesson &$lesson, $selectedVenues)
    {
           $lesson->venue = Venue::find($this->locateVenue($lesson, $selectedVenues)); 
    }

    /**-- return available venue--**/
    public function locateVenue(Lesson &$lesson, $selectedVenues)
    {
        $subjectVenues = Venue::find(Subject::find($this->subject($lesson))->venue_id) != null? Venue::find(Subject::find($this->subject($lesson))->venue_id): [];
        #return ($subjectVenues);
        $section = $this->sections[$this->section($lesson)]['section'];
        #return $section + 1;
        $streamVenues = (Section::find($section + 1) != null)? Section::find($section + 1)->venue: [];
        #return Section::find($section + 1);
        #return ($streamVenues );
        $levelVenues = Level::find($this->level($lesson))->venues != null? Level::find($this->level($lesson))->venues: [];
        #return ($streamVenues );
        
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
            if(is_bool($venue))
            {
                return $venues->id;
            }
            if(!is_bool($venue) && $venue != null && !in_array($venue->id, $selectedVenues))
            {
                return $venue->id;
            }
              
        }
    }


    /*Select session from a section*/

    public function selectSession($section, $sessions, Lesson $lesson)
    {
        $daysessions = $this->sessions[(string)$section];

        foreach ($daysessions as $key => $session)
        {
            if($this->checkSession($key, $lesson, $this->sessionsDurations) && $this->checkSessionType($this->session($key,$lesson)))
              return $key;
        }
    }


    /** Check if session is complete**/

    public function checkSession($session, Lesson $lesson, &$sessionsDurations)
    {
        if(array_key_exists($session, $sessionsDurations) && $sessionsDurations[$session] <= 0)
        {
            unset($sessionsDurations[$session]);
            return false;
        }
        if(array_key_exists($session, $sessionsDurations))
        {
            $sessionsDurations[$session] -= $this->getLessonDuration($lesson);
            return true;
        }
        #return $sessionsDurations[$session] > 0 && $sessionsDurations[$session] > $this->getLessonDuration($lesson);
    }

    public function checkSessionType(DaySession $daysession)
    {
        return $daysession->type == 'lesson';
    }

    /** Calculate Session Duration end - start**/

    public function calculateSessionDuration(DaySession $daysession)
    {
        $duration = $this->time->minutesInterval($daysession->start, $daysession->end); 

        return $duration;
    }

    /**Get Lesson Duration**/

    public function getLessonDuration(Lesson $lesson)
    {
        return Subject::find($lesson->subject->id)->duration;
    }

    /**Get Lesson Duration**/

    public function reduceSessionDuration(Lesson $lesson, $session, &$sessionsDurations)
    {
        $sessionsDurations[$session] -= $this->getLessonDuration($lesson);
    }

    public function subjectLessonLimit()
    {
        foreach (Section::all() as $key => $section)
        {
            $sectionkey = (string)$section->level_id . (string)$section->stream_id;
            $subjects = Level::find($section->level_id)->subjects;
            $totalSubjects = sizeof($subjects);
            foreach ($subjects as $key => $subject)
            {
                $this->subject_lessons_limit[$sectionkey][$subject->id] = (int)($this->section_total_lessons[$sectionkey]/$totalSubjects)+1;
            }
        }

        return $this->subject_lessons_limit;
    }

    public function checkSubjectLessonLimit(Lesson $lesson)
    {
        #return $this->subject_lessons_limit;
        return $this->subject_lessons_limit[$this->section($lesson)][(string)$this->subject($lesson)] > 0;
    }

    public function reduceSubjectLessonLimit(Lesson $lesson)
    {
        return $this->subject_lessons_limit[$this->section($lesson)][(string)$this->subject($lesson)] -= 1;
    }
}