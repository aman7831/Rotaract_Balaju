<?php

namespace App\Http\Controllers;

use App\Models\NewApplication;
use Illuminate\Http\Request;

class NewApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.newapplication',);    
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
     * @param  \App\Models\NewApplication  $newApplication
     * @return \Illuminate\Http\Response
     */
    public function show(NewApplication $newApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewApplication  $newApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(NewApplication $newApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewApplication  $newApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewApplication $newApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewApplication  $newApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewApplication $newApplication)
    {
        //
    }
}
