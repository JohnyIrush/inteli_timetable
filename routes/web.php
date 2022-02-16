<?php

use App\Http\Controllers\UI\AcademicController;
use App\Http\Controllers\UI\DayController;
use App\Http\Controllers\UI\DaySessionController;
use App\Http\Controllers\UI\SubjectController;
use App\Http\Controllers\UI\TeacherController;
use App\Http\Controllers\UI\TimetableController;
use App\Http\Controllers\UI\UIController;
use App\Http\Controllers\UI\VenueController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
 Main UI Routes
*/

Route::get('/', [UIController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UIController::class, 'profile'])->name('user-profile');
Route::get('/finance', [UIController::class, 'finance'])->name('finance');
Route::get('/virtual-reality', [UIController::class, 'vr'])->name('virtual-reality');


/**
 * Academic UI Routes
 * 
*/

Route::get('/academic', [AcademicController::class, 'academic'])->name('academic');

/**
 * Timetable submodule 
 * of Academic UI Routes
 * 
*/

Route::get('/timetable', [TimetableController::class, 'timetable'])->name('timetable');


/***
 * Timetable Variables
*/

Route::get('/days', [DayController::class, 'days'])->name('days');
Route::get('/daysession', [DaySessionController::class, 'daySession'])->name('daysession');
Route::get('/venues', [VenueController::class, 'venues'])->name('venues');

/**
 * Academics Module Routes
*/

Route::get('/subjects', [SubjectController::class, 'subjects'])->name('subjects'); //Timetable variable

/**
 * Staff Module Routes
*/

Route::get('/teachers', [TeacherController::class, 'teachers'])->name('teachers'); //Timetable variable