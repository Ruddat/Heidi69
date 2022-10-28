<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortFetischBasic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortFetischBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortFetischBasic = [

            "Natursekt (NS) aktiv",
            "Natursekt (NS) passiv",
            "Kaviar (KV) aktiv",
            "Kaviar (KV) passiv",
            "Fisting (FF) aktiv",
            "Fisting (FF) passiv",
            "Fesselspielchen aktiv",
            "Fesselspielchen passiv",
            "Brustwarzenspielchen aktiv",
            "Brustwarzenspielchen passiv",

           ];

          for ($item=0; $item < count($EscortFetischBasic); $item++) {
          foreach ($EscortFetischBasic as $state) {
          $state = new EscortFetischBasic();
          $state->fetisch_basic = $EscortFetischBasic[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
