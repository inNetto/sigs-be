<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profissional extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'nome',
        'tipo',
        'status'
    ];

    public function nucleo(): BelongsTo
    {
        return $this->belongsTo(Nucleo::class);
    }
}
