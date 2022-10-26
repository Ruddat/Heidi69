<?php

namespace Database\Seeders;

use App\Models\EscortHautfarbe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortHautfarbeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortHautfarbe = [

            "hell",
            "mittel",
            "bräunlich",
            "schwarz",

           ];

          for ($item=0; $item < count($EscortHautfarbe); $item++) {
          foreach ($EscortHautfarbe as $state) {
          $state = new EscortHautfarbe();
          $state->hautfarbe = $EscortHautfarbe[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
