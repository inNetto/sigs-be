<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InscritoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nome' => (string)$this->nome,
            'estado_civil' => (string)$this->estado_civil,
            'escolaridade' => (string)$this->escolaridade,
            'profissao' => (string)$this->profissao,
            'telefone' => (string)$this->telefone,
            'data_nascimento'=> (date('D-M-Y')),
            'cor'=> (string)$this->cor,
            'sexo'=> (string)$this->sexo,
            'cpf'=> (string)$this->cpf,
            'documento_alternativo'=> (string)$this->documento_alternativo,
        ];
    }
}
