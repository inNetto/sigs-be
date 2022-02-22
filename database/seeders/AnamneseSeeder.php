<?php

namespace Database\Seeders;

use App\Models\Anamnese;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnamneseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Anamnese::factory()
            ->count(50)
            ->create();
    }
}
