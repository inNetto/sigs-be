<?php

namespace Database\Seeders;

use App\Models\Dono;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Dono::factory()
            ->count(50)
            ->create();
    }
}
