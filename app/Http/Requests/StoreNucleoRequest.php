<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNucleoRequest extends FormRequest
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
            'numero' => 'required|integer',
            'nome' => 'required|string',
            'bairro' => 'required|string',
            'localizacao' => 'required|string',
            'zona' => 'required|string',
            'ap' => 'required|string',
            'status' => 'required|string',
            'observacao' => 'required|string',
        ];
    }
}
