<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use App\Http\Requests\StoreInscritoRequest;
use App\Http\Requests\UpdateInscritoRequest;

class InscritoController extends Controller
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
     * @param  \App\Http\Requests\StoreInscritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInscritoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function show(Inscrito $inscrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscrito $inscrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInscritoRequest  $request
     * @param  \App\Models\Inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInscritoRequest $request, Inscrito $inscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscrito $inscrito)
    {
        //
    }
}
