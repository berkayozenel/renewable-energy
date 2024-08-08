<?php

namespace App\Http\Controllers;

use App\Models\StationType;
use Illuminate\Http\Request;

class StationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stationTypes = StationType::all();

        if(!$stationTypes){
            return response()->json(['success' => false, 'error' => 'Station Type not found!']);
        }

        return response()->json($stationTypes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StationType $stationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StationType $stationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StationType $stationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StationType $stationType)
    {
        //
    }
}
