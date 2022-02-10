<?php

namespace App\Http\Controllers;

use App\Http\Resources\InscritoResource;
use App\Models\Inscrito;
use App\Http\Requests\StoreInscritoRequest;
use App\Http\Requests\UpdateInscritoRequest;
use Illuminate\Http\Response;

class InscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return InscritoResource::collection(\App\Models\Inscrito::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

       //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInscritoRequest  $request
     * @return StoreInscritoRequest
     */
    public function store(StoreInscritoRequest $request)
    {
       /*$inscrito = new Inscrito();
       $inscrito->save($request->all());*/
       return '$request';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return Response
     */
    public function show(Inscrito $inscrito)
    {
        return new InscritoResource($inscrito);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return Response
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
     * @return Response
     */
    public function update(UpdateInscritoRequest $request, Inscrito $inscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscrito  $inscrito
     * @return Response
     */
    public function destroy(Inscrito $inscrito)
    {
        //
    }
}
