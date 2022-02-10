<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'cor',
        'sexo',
        'cpf',
        'documento_alternativo',
    ];

    public function nucleo()
    {
        return $this->belongsTo(Nucleo::class);
    }

    public function anamnese()
    {
        return $this->belongsTo(Anamnese::class);
    }
}
