<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Http\Requests\StoreDayRequest;
use App\Http\Requests\UpdateDayRequest;

class DayController extends Controller
{
    /**
     * Display a listing of the Day resource.
     *
     * 
     */
    public function days()
    {
        return Day::all();
    }
}
