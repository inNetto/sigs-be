<?php

namespace App\Services;

use App\Http\Resources\InscritoResource;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;

class InscritoService
{

    public function teste($nucleo, $input){

        DB::transaction(function () use ($nucleo, $input) {

            $newInscrito = $nucleo->inscritos()->create($input);
            $id = $newInscrito->id;
            Endereco::create([
                'cep'     => $input['cep'],
                'rua'     => $input['rua'],
                'numero'     => $input['numero'],
                'bairro'     => $input['bairro'],
                'municipio'     => $input['municipio'],
                'inscrito_id'     => $id,
            ]);

            return new InscritoResource($newInscrito);
        });
    }
}
