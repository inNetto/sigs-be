<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Models\User::class)->create([
            'email' => 'teste@gmail.com'
        ]);*/
        
            
            //factory(App\User::class, 50)->create();
        User::factory()
        ->count(50)
        ->create();

    }
}
