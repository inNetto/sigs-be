<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cep' => Str::random(8),
            'rua' => Str::random(45),
            'bairro' => Str::random(45),
            'municipio' => Str::random(45),
            'inscrito_id' => '1',
        ];
    }
}
