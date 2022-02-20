<?php

namespace Database\Seeders;

use App\Models\Profissional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Profissional::factory()
        ->count(50)
        ->create();
    }
}
