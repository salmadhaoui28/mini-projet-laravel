<?php

namespace App\Http\Controllers;

use App\Models\keynotes;
use Illuminate\Http\Request;

class KeynotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keynotes = Keynotes::all(); // Retrieve all keynotes from the database
    
        return view('keynotes.index', ['keynotes' => $keynotes]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keynotes  $keynotes
     * @return \Illuminate\Http\Response
     */
    public function show(keynotes $keynotes)
    {
        return view('keynotes.show', compact('keynote'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keynotes  $keynotes
     * @return \Illuminate\Http\Response
     */
    public function edit(keynotes $keynotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\keynotes  $keynotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keynotes $keynotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keynotes  $keynotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(keynotes $keynotes)
    {
        //
    }
}
