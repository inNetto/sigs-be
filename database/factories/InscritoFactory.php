<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscrito>
 */
class InscritoFactory extends Factory
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
            //'nome' =>  $this->faker->text(10),
            'nome' => $this->faker->name(),
            'estado_civil' => Str::random(10),
            'escolaridade' => Str::random(10),
            'profissao' => Str::random(10),
            'telefone' => Str::random(10),
            'data_nascimento' => '0002-02-02',
            'naturalidade' => Str::random(10),
            'cor' => Str::random(10),
            'cpf' => Str::random(11),
            'documento_alternativo' => Str::random(10),
            'sexo' => Str::random(10),
            'nucleo_id' => '1',

        ];
    }
}
