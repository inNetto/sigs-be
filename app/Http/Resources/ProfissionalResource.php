<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfissionalResource extends JsonResource
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
            'cpf' => (string)$this->cpf,
            'nome' => (string)$this->nome,
            'tipo' => (integer)$this->tipo,
            'status' => (string)$this->status,
        ];
    }
}
