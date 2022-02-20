<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profissional>
 */
class ProfissionalFactory extends Factory
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
            'cpf' => Str::random(11),
            'nome' => $this->faker->name(),
            'tipo' => '2',
            'status' => Str::random(20),
            'nucleo_id' => '1',
        ];
    }
}
