<?php

namespace Database\Seeders;

use App\Models\Inscrito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Inscrito::class)->create([
            'nome' => 'Thays'
        ]);
    }
}
