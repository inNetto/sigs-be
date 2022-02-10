<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscritoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'estado_civil' => 'required|string',
            'escolaridade' => 'required|string',
            'profissao' => 'required|string',
            'telefone' => 'required|string',
            'data_nascimento' => 'required|string',
            'cor' => 'required|string',
            'sexo' => 'required|string',
            'cpf' => 'string|max:8',
            'documento_alternativo' => 'string',
        ];
    }
}
