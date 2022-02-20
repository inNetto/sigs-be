<?php

namespace Database\Seeders;

use App\Models\Nucleo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NucleoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Nucleo::factory()
        ->count(50)
        ->create();
    }
}
