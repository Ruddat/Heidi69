<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortServiceBasic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortServiceBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortServiceBasic = [

            "Zungenanal (ZA) aktiv",
            "Zungenanal (ZA) passiv",
            "Fingeranal (FA)/
            Analmassagen aktiv",
            "Fingeranal (FA)/
            Analmassagen passiv",
            "Gesichtsbesamung (GB) aktiv",
            "Gesichtsbesamung (GB) passiv",
            "Körperbesamung (KB) aktiv",
            "Körperbesamung (KB) passiv",
            "Dildospiele (DS) aktiv",
            "Dildospiele (DS) passiv",
            "Fingerspiele aktiv",
            "Fingerspiele passiv",

           ];

          for ($item=0; $item < count($EscortServiceBasic); $item++) {
          foreach ($EscortServiceBasic as $state) {
          $state = new EscortServiceBasic();
          $state->service_basic = $EscortServiceBasic[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
