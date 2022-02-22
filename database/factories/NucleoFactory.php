<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nucleo>
 */
class NucleoFactory extends Factory
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
            'numero' => rand(1, 50),
            'nome' => $this->faker->name(),
            'bairro' => Str::random(45),
            'localizacao' => Str::random(45),
            'zona' => Str::random(10),
            'ap' => Str::random(3),
            'status' => Str::random(25),
            'observacao' => Str::random(50),
            'dono_id' => '1',
        ];
    }
}
