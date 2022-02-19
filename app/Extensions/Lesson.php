<?php

namespace App\Extensions;

use App\Models\Level;
use App\Models\Stream;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Venue;

class Lesson
{
    public $teacher;
    public $subject;
    public $venue;
    public $level;
    public $stream;

    public function __construct(Teacher $teacher = null, Subject $subject = null, Venue $venue = null,Level $level = null, Stream $stream = null)
    {
        $this->teacher = $teacher;
        $this->subject = $subject;
        $this->venue = $venue;
        $this->level = $level;
        $this->stream = $stream;
    }
}