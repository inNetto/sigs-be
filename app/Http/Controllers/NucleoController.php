<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscritoRequest;
use App\Http\Requests\StoreProfissionalRequest;
use App\Http\Resources\InscritoResource;
use App\Http\Resources\NucleoResource;
use App\Http\Resources\ProfissionalResource;
use App\Models\Dono;
use App\Models\Nucleo;
use App\Http\Requests\StoreNucleoRequest;
use App\Http\Requests\UpdateNucleoRequest;

class NucleoController extends Controller
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
     * @param  \App\Http\Requests\StoreNucleoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNucleoRequest $request)
    {
        $nucleo = new Nucleo();
        $input = $request->validated();
        $nucleo->fill($input);
        $nucleo->save();
        return new NucleoResource($nucleo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function show(Nucleo $nucleo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nucleo $nucleo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNucleoRequest  $request
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNucleoRequest $request, Nucleo $nucleo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nucleo $nucleo)
    {
        //
    }

    public function addInscrito(Nucleo $nucleo, StoreInscritoRequest $request){

        $input = $request->validated();
        $inscrito = $nucleo->inscritos()->create($input);

        return new InscritoResource($inscrito);
    }

    public function addProfissional(Nucleo $nucleo, StoreProfissionalRequest $request){

        $input = $request->validated();
        $profissional = $nucleo->profissionais()->create($input);

        return new ProfissionalResource($profissional);
    }
}
