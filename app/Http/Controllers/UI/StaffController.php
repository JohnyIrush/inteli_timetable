<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;

class StaffController extends Controller
{
    /**
     * Staff 
     */
    public function staff()
    {
        return Inertia::render('Staff/windows/Staff');
    }

}
