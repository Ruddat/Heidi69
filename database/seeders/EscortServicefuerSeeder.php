<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortServicefuer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortServicefuerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortServicefuer = [

            "Herren",
            "Damen",
            "Paare (MF)",
            "Menschen mit Behinderung",

           ];

          for ($item=0; $item < count($EscortServicefuer); $item++) {
          foreach ($EscortServicefuer as $state) {
          $state = new EscortServicefuer();
          $state->service_fuer = $EscortServicefuer[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
