<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDjRequest;
use App\Http\Requests\UpdateDjRequest;
use App\Models\Dj;

class DjController extends Controller
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
     * @param  \App\Http\Requests\StoreDjRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDjRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dj  $dj
     * @return \Illuminate\Http\Response
     */
    public function show(Dj $dj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dj  $dj
     * @return \Illuminate\Http\Response
     */
    public function edit(Dj $dj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDjRequest  $request
     * @param  \App\Models\Dj  $dj
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDjRequest $request, Dj $dj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dj  $dj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dj $dj)
    {
        //
    }
    public function getDjs(){
        $djs = Dj::all();
        return $djs;
    }
}
