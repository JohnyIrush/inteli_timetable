<?php

namespace App\Extensions;

use Carbon\Carbon;

class Time
{
    public function __construct()
    {

    }


    /*Calculate time interval duration in minutes*/

    public function minutesInterval($start, $end)
    {
        $start =  Carbon::parse(date("H:i:s", strtotime($start)));
        $end = Carbon::parse(date("H:i:s", strtotime($end)));
        $interval = $end->diff($start);
        
        return ($interval->format('%h') * 60) + $interval->format('%i') + ($interval->format('%s')/60);
    }
}