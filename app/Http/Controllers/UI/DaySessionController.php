<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\DaySession;
use App\Http\Requests\StoreDaySessionRequest;
use App\Http\Requests\UpdateDaySessionRequest;

class DaySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function daySession()
    {
        return DaySession::all();
    }

}
