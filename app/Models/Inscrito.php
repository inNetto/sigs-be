<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    use HasFactory;

    public function nucleo()
    {
        return $this->belongsTo(Nucleo::class);
    }

    public function anamnese()
    {
        return $this->belongsTo(Anamnese::class);
    }
    public $timestamps = false;

}
