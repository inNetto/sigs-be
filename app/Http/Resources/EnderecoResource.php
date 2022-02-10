<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnderecoResource extends JsonResource
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
            'cep' => (int)$this->cep,
            'rua' => (string)$this->rua,
            'bairro' => (string)$this->bairro,
            'municipio' => (string)$this->municipio,
        ];
    }
}
