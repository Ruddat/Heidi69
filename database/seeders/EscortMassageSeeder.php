<?php

namespace Database\Seeders;

use App\Models\EscortMassage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortMassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortMassage = [

            "KEIN Geschlechtsverkehr (nur Massagen)",
            "allg. erotische Massage",
            "Handentspannung (HE)",
            "Intim",
            "Body-to-Body",
            "Tantra",
            "Thai",
            "Ganzkörper",
            "Öl",
            "Synchron",
            "Duo",
            "Nuru",
            "Prostata",
            "Po",
            "Lingam",
            "Yoni",
            "Spanisch",
            "Bizarr/SM",
            "Pärchen",
            "Japanische M.",
            "Shiatsu",

           ];

          for ($item=0; $item < count($EscortMassage); $item++) {
          foreach ($EscortMassage as $state) {
          $state = new EscortMassage();
          $state->massage = $EscortMassage[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
