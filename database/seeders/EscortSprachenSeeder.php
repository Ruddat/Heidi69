<?php

namespace Database\Seeders;

use App\Models\EscortSprachen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortSprachenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortSprachen = [

            "Deutsch",
            "Französisch",
            "Arabisch",
            "Türkisch",
            "Englisch",
            "Spanisch",
            "Chinesisch",
            "Tschechisch",
            "Polnisch",
            "Italienisch",
            "Thai",
            "Ungarisch",
            "Russisch",
            "Portugiesisch",
            "Japanisch",
            "Rumänisch",
           ];

          for ($item=0; $item < count($EscortSprachen); $item++) {
          foreach ($EscortSprachen as $state) {
          $state = new EscortSprachen();
          $state->sprachen = $EscortSprachen[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
