<?php

namespace Database\Seeders;

use App\Models\EscortAllgemein;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortAllgemeinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $EscortAllgemein = [

                "sehr sinnlich",
                "sehr zärtlich",
                "nymphoman",
                "Spaß am Sex",
                "temperamentvoll",

                ];

              for ($item=0; $item < count($EscortAllgemein); $item++) {
              foreach ($EscortAllgemein as $state) {
              $state = new EscortAllgemein;
              $state->allg_service = $EscortAllgemein[$item];
              $state->save();
              $item+=1;
          }
        }
    }
}
}
