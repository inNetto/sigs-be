<?php

namespace App\Http\Controllers;

use App\Models\Dono;
use App\Http\Requests\StoreDonoRequest;
use App\Http\Requests\UpdateDonoRequest;

class DonoController extends Controller
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
     * @param  \App\Http\Requests\StoreDonoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dono  $dono
     * @return \Illuminate\Http\Response
     */
    public function show(Dono $dono)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dono  $dono
     * @return \Illuminate\Http\Response
     */
    public function edit(Dono $dono)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonoRequest  $request
     * @param  \App\Models\Dono  $dono
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonoRequest $request, Dono $dono)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dono  $dono
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dono $dono)
    {
        //
    }
}
