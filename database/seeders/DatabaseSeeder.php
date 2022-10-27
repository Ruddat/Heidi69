<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EscortSprachen;
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



        \App\Models\User::factory()->create([
            'name' => 'Ruddat',
            'email' => 'ingo.ruddat@gmail.com',
            'password' => bcrypt('Ruddat66'),


         ]);

        \App\Models\User::factory(10)->create();

        \App\Models\EscortProfile::factory(30)->create();


        $this->call([
            EscortPersoenlichkeitSeeder::class,
            EscortHaareSeeder::class,
            EscortBrustSeeder::class,
            EscortHautfarbeSeeder::class,
            EscortAugenfarbeSeeder::class,
            EscortIntimbeharungSeeder::class,
            EscortPiercingSeeder::class,
            EscortSonstigesSeeder::class,
            EscortTypeSeeder::class,
            EscortSprachenSeeder::class,
            EscortAllgemeinSeeder::class,
            EscortServicefuerSeeder::class,
            EscortVerkehrSeeder::class,
            EscortMassageSeeder::class,
            EscortServiceDetailSeeder::class,


           //  PostSeeder::class,
          //  CommentSeeder::class,
        ]);


    }
}
