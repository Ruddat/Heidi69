<?php

namespace Database\Seeders;

use App\Models\EscortBizarr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortBizarrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortBizarr = [

            "Domina (klassisch, unnahbar, unberührbar)",
            "Domina (nahbar, berührbar)",
            "Jungdomina",
            "Bizarrdame (a/p)",
            "Meister / Herr",
            "Sklave / Sklavin",
            "Zofe",
            "Gespielin",


           ];

          for ($item=0; $item < count($EscortBizarr); $item++) {
          foreach ($EscortBizarr as $state) {
          $state = new EscortBizarr();
          $state->bizarr = $EscortBizarr[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
