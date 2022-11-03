<?php

namespace Database\Seeders;

use App\Models\EscortHaare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscortHaareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortHaare = [

            "blond",
            "dunkelblond",
            "brünett",
            "rotbraun",
            "dunkelbraun",
            "rot",
            "echt rot",
            "rotblond",
            "grau",
            "schwarz",
            "wechselnd",
            "Glatze",
            "kurz",
            "kinnlang",
            "schulterlang",
            "rückenlang",
            "glatt",
            "wellig",
            "gelockt",
            "Afro",
            "Dreadlocks",
            "Braids",


           ];

          for ($item=0; $item < count($EscortHaare); $item++) {
          foreach ($EscortHaare as $state) {
          $state = new EscortHaare();
          $state->haare = $EscortHaare[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
