<?php

namespace Database\Seeders;

use App\Models\EscortSonstiges;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortSonstigesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortSonstiges = [

            "Nichtraucher",
            "HH",

           ];

          for ($item=0; $item < count($EscortSonstiges); $item++) {
          foreach ($EscortSonstiges as $state) {
          $state = new EscortSonstiges();
          $state->sonstiges = $EscortSonstiges[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
