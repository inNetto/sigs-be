<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dono extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function nucleos()
    {
        return $this->hasMany(Nucleo::class);
    }
}
