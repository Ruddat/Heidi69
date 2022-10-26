<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortAugenfarbe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortAugenfarbeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortAugenfarbe = [

            "braun",
            "blau",
            "grün",
            "grau",
            "blau-grau",
            "grün-grau",
            "blau-grün",



           ];

          for ($item=0; $item < count($EscortAugenfarbe); $item++) {
          foreach ($EscortAugenfarbe as $state) {
          $state = new EscortAugenfarbe();
          $state->augenfarbe = $EscortAugenfarbe[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
