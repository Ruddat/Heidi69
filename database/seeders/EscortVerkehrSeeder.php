<?php

namespace Database\Seeders;

use App\Models\EscortVerkehr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortVerkehrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortVerkehr = [

            "Geschlechtsverkehr (GV)",
            "Französisch (Franz.)",
            "Analverkehr (AV)",
            "Französisch bei Ihr / OV",
            "Spanisch (Span./BV/TF)",
            "Französisch beidseitig /69",
            "Girlfriendsex (GF6)",
            "Zu dritt (MMF)",
            "Flotter Dreier (MFF)",
            "Gruppensex (GS)",
            "Herrenrunde (ab 3M)",
            "Deep Throat (DT)",
            "Sandwich (SW)",

           ];

          for ($item=0; $item < count($EscortVerkehr); $item++) {
          foreach ($EscortVerkehr as $state) {
          $state = new EscortVerkehr();
          $state->verkehr = $EscortVerkehr[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
