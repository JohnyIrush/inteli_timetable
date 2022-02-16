<?php

namespace App\Http\Controllers;

use App\Models\DaySession;
use App\Http\Requests\StoreDaySessionRequest;
use App\Http\Requests\UpdateDaySessionRequest;

class DaySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDaySessionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaySessionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaySession  $daySession
     * @return \Illuminate\Http\Response
     */
    public function show(DaySession $daySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaySession  $daySession
     * @return \Illuminate\Http\Response
     */
    public function edit(DaySession $daySession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaySessionRequest  $request
     * @param  \App\Models\DaySession  $daySession
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaySessionRequest $request, DaySession $daySession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaySession  $daySession
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaySession $daySession)
    {
        //
    }
}
