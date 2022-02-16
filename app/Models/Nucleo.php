<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nucleo extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'nome',
        'bairro',
        'localizacao',
        'zona',
        'ap',
        'status',
        'observacao',
    ];

    public function inscritos(): HasMany
    {
        return $this->hasMany(Inscrito::class);
    }

    public function profissionais(): HasMany
    {
        return $this->hasMany(Profissional::class);
    }

    public function dono():BelongsTo
    {
        return $this->belongsTo(Dono::class);
    }
}
