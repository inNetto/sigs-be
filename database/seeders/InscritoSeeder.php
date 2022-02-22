<?php

namespace Database\Seeders;

use App\Models\Inscrito;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
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
        /*factory(Inscrito::class)->create([
            'nome' => 'Thays'
        ]);*/
        //factory(App\Models\Inscrito::class, 50)->create();
        /*Inscrito::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();*/

            /*factory(App\User::class, 50)->create()->each(function ($user) {
                $user->posts()->save(factory(App\Post::class)->make());
            });

            Factory(Inscrito::class, 10)->create()->each(function ($inscrito) {
                $inscrito->posts()->saveMany(factory(Posts::class, 5)->make());
            });*/
            Inscrito::factory()
            ->count(50)
            ->create();
    }
}
