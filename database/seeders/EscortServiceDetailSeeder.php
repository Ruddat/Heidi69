<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EscortServiceDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortServiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortServiceDetail = [

            "Zungenküsse (ZK)",
            "Körperküsse",
            "Eierlecken (EL)",
            "extra langes Vorspiel",
            "gekonnter Striptease",
            "Outdoor-Sex",
            "Fuß- u. Schuherotik",
            "AV bei Ihm",
            "Intimrasur",
            "Schmusen, Kuscheln (ohne ZK)",
            "Badeservice",
            "Duschservice",
            "Masturbation (Mast.)",
            "Lesboshow / Duo (LS)",
            "Foto- u. Videoaufnahmen (LS)",
            "Rollenspiele (RS)",
            "Verbalerotik (VE)",
            "Squirting",
            "Strapserotik",

           ];

          for ($item=0; $item < count($EscortServiceDetail); $item++) {
          foreach ($EscortServiceDetail as $state) {
          $state = new EscortServiceDetail();
          $state->service_detail = $EscortServiceDetail[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
