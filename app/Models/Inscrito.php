<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Inscrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'estado_civil',
        'escolaridade',
        'profissao',
        'telefone',
        'data_nascimento',
        'naturalidade',
        'cor',
        'cpf',
        'documento_alternativo',
        'sexo',
    ];

    public function nucleo(): BelongsTo
    {
        return $this->belongsTo(Nucleo::class);
    }

    public function anamnese(): HasOne
    {
        return $this->hasOne(Anamnese::class);
    }

    public function endereco(): HasOne
    {
        return $this->hasOne(Endereco::class);
    }

}
