<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EscortProfile;
use App\Models\EscortSprachen;
use Illuminate\Database\Seeder;
use App\Models\EscortFetischBasic;

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

        EscortProfile::factory(6)->create();


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
            EscortServiceBasicSeeder::class,
            EscortFetischBiszarrSeeder::class,
            EscortFetischBasicSeeder::class,
            EscortBizarrSeeder::class,
            RolesAndPermissionsSeeder::class,


           //  PostSeeder::class,
          //  CommentSeeder::class,
        ]);


    }
}
