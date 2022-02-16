<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dono extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function nucleos():HasMany
    {
        return $this->hasMany(Nucleo::class);
    }
}
