<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    use HasFactory;

    public function inscritos()
    {
        return $this->hasMany(Inscrito::class);
    }

    public function profissionais()
    {
        return $this->hasMany(Profissional::class);
    }

    public function dono()
    {
        return $this->belongsTo(Dono::class);
    }
    public $timestamps = false;

}
