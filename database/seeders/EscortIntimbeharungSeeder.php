<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortIntimbeharung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortIntimbeharungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortIntimbeharung = [

            "total rasiert",
            "teilrasiert",
            "behaart",
            "stark behaart",

           ];

          for ($item=0; $item < count($EscortIntimbeharung); $item++) {
          foreach ($EscortIntimbeharung as $state) {
          $state = new EscortIntimbeharung();
          $state->intimbehaarung = $EscortIntimbeharung[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
