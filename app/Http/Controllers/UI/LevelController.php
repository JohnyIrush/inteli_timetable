<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Models\Teacher;

class LevelController extends Controller
{
    public function levels()
    {
        foreach(Teacher::with('levels')->get() as $teacher)
        {
            $levels = $teacher->levels;
            #return response()->json($levels);
            #return response()->json($levels->levels);
            foreach($levels as $level)
            {
                foreach (Level::find($level->id)->with('streams')->get() as $streams)
                {
                    $arr = [];
                    return response()->json(Level::find($level->id)->with('streams')->get());
                    $streams = isset($streams->streams)? $streams->streams : [];
                    foreach ($streams as $stream)
                    {
                        array_push($arr, $stream->id);
                    }
                 
                    Teacher::find($teacher->id)->streams()->attach(array_rand($arr, 2));
                }
            }
        } 
    }
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
     * @param  \App\Http\Requests\StoreLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLevelRequest  $request
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }
}
