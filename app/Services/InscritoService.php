<?php


namespace App\Services;


use App\Http\Resources\EnderecoResource;
use App\Http\Resources\InscritoResource;
use App\Models\Endereco;
use App\Models\Inscrito;

class InscritoService
{

    public function createInscrito($inputInscrito)
    {
        $inscrito = new Inscrito();
        $inscrito->fill($inputInscrito);
        $inscrito->save();
        $this->createEndereco($inputInscrito['cep'],$inputInscrito['rua'],$inputInscrito['numero'],$inputInscrito['complemento'],$inputInscrito['bairro'],$inputInscrito['municipio']);

        return new InscritoResource($inscrito);
    }

    public function createEndereco(string $cep, string $rua, string $numero, $complemento, $bairro, $municipio){

        $endereco = Endereco::create([
            'first_name'         => $cep,
            'last_name'          => $rua,
            'email'              => $numero,
            'password'           => $complemento,
            'password'           => $bairro,
            'password'           => $municipio,
        ]);
        $model = new Endereco();
        $model->save($endereco);
        return new EnderecoResource($endereco);
    }
}
