<?php

namespace Database\Seeders;

use App\Models\EscortPiercing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortPiercingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortPiercing = [

            "Intim-Piercing",
            "Brust-Piercing",
            "Gesicht-Piercing",
            "Nabel-Piercing",
            "Zungen-Piercing",
            "Tattoos",
            "Branding",
            "Dermal-Anker",
            "KEIN Körperschmuck",


           ];

          for ($item=0; $item < count($EscortPiercing); $item++) {
          foreach ($EscortPiercing as $state) {
          $state = new EscortPiercing();
          $state->piercing = $EscortPiercing[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
