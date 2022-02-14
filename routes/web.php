<?php

use App\Http\Controllers\UI\AcademicController;
use App\Http\Controllers\UI\TimetableController;
use App\Http\Controllers\UI\UIController;
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