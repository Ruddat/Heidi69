<?php

namespace Database\Seeders;

use App\Models\EscortType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $EscortType = [

                "deutsch",
                "Latina",
                "karibisch",
                "westeuropäisch",
                "orientalisch",
                "mitteleuropäisch",
                "osteuropäisch",
                "exotisch",
                "skandinavisch",
                "asiatisch",
                "afrikanisch",
                "südländisch",
                ];

              for ($item=0; $item < count($EscortType); $item++) {
              foreach ($EscortType as $state) {
              $state = new EscortType;
              $state->typ = $EscortType[$item];
              $state->save();
              $item+=1;
          }
        }
    }
}
}
