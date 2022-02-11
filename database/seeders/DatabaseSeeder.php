<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(UserSeeder::class);
        //'nome' => Str::random(10),
            //'email' => Str::random(10).'@gmail.com',
            //'password' => Hash::make('password'),
        DB::table('donos')->insert([
            'nome' => Str::random(10),
        ]);

        DB::table('nucleos')->insert([
            'numero' => '1',
            'nome' => Str::random(10),
            'bairro' => Str::random(10),
            'localizacao' => Str::random(10),
            'zona' => Str::random(10),
            'ap' => Str::random(3),
            'status' => Str::random(10),
            'observacao' => Str::random(10),
            'dono_id' => '1',
        ]);

        DB::table('inscritos')->insert([
            'nome' => Str::random(10),
            'estado_civil' => Str::random(10),
            'escolaridade' => Str::random(10),
            'profissao' => Str::random(10),
            'telefone' => Str::random(3),
            'data_nascimento' => '0001-01-01',
            'naturalidade' => Str::random(10),
            'cor' => Str::random(10),
            'cpf' => Str::random(11),
            'documento_alternativo' => Str::random(10),
            'sexo' => Str::random(10),
            'nucleo_id' => '1',

        ]);
    }
}

