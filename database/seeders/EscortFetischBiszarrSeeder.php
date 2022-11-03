<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortFetischBasic;
use App\Models\EscortFetischBiszarr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortFetischBiszarrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortFetischBiszarr = [

            "Devote (Bizarr-)spielchen",
            "Fetischspielchen",
            "Wachsspielchen (WS)",
            "Facesitting (FS)",
            "leichte Erziehung",
            "“sanfte” Schläge",
            "Dominante (Bizarr-)spielchen",
            "Lack u. Leder",
            "Latex",
            "Nylonerotik (Fetisch)",

           ];

          for ($item=0; $item < count($EscortFetischBiszarr); $item++) {
          foreach ($EscortFetischBiszarr as $state) {
          $state = new EscortFetischBiszarr();
          $state->fetisch_bizar = $EscortFetischBiszarr[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
