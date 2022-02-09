<?php

namespace App\Http\Controllers;

use App\Models\Anamnese;
use App\Http\Requests\StoreAnamneseRequest;
use App\Http\Requests\UpdateAnamneseRequest;

class AnamneseController extends Controller
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
     * @param  \App\Http\Requests\StoreAnamneseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnamneseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anamnese  $anamnese
     * @return \Illuminate\Http\Response
     */
    public function show(Anamnese $anamnese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anamnese  $anamnese
     * @return \Illuminate\Http\Response
     */
    public function edit(Anamnese $anamnese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnamneseRequest  $request
     * @param  \App\Models\Anamnese  $anamnese
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnamneseRequest $request, Anamnese $anamnese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anamnese  $anamnese
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anamnese $anamnese)
    {
        //
    }
}
