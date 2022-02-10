<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NucleoResource extends JsonResource
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
            'numero' => (integer)$this->id,
            'nome' => (string)$this->nome,
            'bairro' => (string)$this->bairro,
            'localizacao' => (string)$this->localizacao,
            'zona' => (string)$this->zona,
            'ap' => (string)$this->ap,
            'status'=> (string)$this->status,
            'observacao'=> (string)$this->observacao
        ];
    }
}
