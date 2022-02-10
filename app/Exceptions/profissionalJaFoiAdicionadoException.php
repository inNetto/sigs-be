<?php

namespace App\Exceptions;

use Exception;

class profissionalJaFoiAdicionadoException extends Exception
{
    protected $message = 'Profissional já foi associado ao núcleo';

    public function render()
    {
        return response()->json([
            'error'   => class_basename($this),
            'message' => $this->getMessage(),
        ], 400);
    }
}
