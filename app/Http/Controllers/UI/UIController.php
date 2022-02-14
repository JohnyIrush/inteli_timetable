<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\UI;
use App\Http\Requests\StoreUIRequest;
use App\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Render the main dashboard
     */
    public function dashboard()
    {
        return Inertia::render('Theme/windows/Dashboard');
    }


    /**
     * Render the main profile
     */
    public function profile()
    {
        return Inertia::render('Theme/windows/Profile');
    }


    /**
     * Render the main finance
     */
    public function finance()
    {
        return Inertia::render('Theme/windows/Finance');
    }


    /**
     * Render the main finance
     */
    public function vr()
    {
        return Inertia::render('Theme/windows/VR');
    }
}
