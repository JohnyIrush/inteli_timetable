<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use App\Http\Requests\StoreAcademicRequest;
use App\Http\Requests\UpdateAcademicRequest;
use Inertia\Inertia;

class AcademicController extends Controller
{
    public function academic()
    {
        return Inertia::render('Academic/windows/Academic');
    }
}
