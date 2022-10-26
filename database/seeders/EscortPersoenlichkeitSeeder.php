<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortPersoenlichkeit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortPersoenlichkeitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortPersoenlichkeit = [

            "weiblich",
            "männlich Gay",
            "männlich Dressman",
            "Transsexuell",
            "Transvestit",
            "Paar / Duo",

           ];

          for ($item=0; $item < count($EscortPersoenlichkeit); $item++) {
          foreach ($EscortPersoenlichkeit as $state) {
          $state = new EscortPersoenlichkeit();
          $state->persoenlichkeit = $EscortPersoenlichkeit[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
